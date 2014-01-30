 <? function ConfirmOrder($id){
        $data = array('order_status' => 1 );
        $q = $this->db->where('order_id', $id)->update('order_data', $data); 
        if ($q) {
            header("Content-type: text/html; charset=utf-8");
            echo "<script>alert('บันทึกการเปลี่ยนแปลงเสร็จสมบูรณ์')</script>";

            $sql = $this->db
            ->select('*')
            ->from('order_data')
            ->join('user_data','order_data.user_id = user_data.user_id')
            ->where('order_id',$id)
            ->get()
            ->result();

            foreach ($sql as $e) {
                $_e = $e->email;
            }
             $config = array(
                  'protocol' => 'smtp',
                  'smtp_host' => 'ssl://smtp.googlemail.com',
                  'smtp_port' => 465,
                  'smtp_user' => 'iamwattanas@gmail.com', // change it to yours
                  'smtp_pass' => '', // change it to yours
                  'mailtype' => 'html',
                  'charset' => 'utf-8'
            );

            $ss = $this->db
                ->select('*')
                ->from('order_data')
                ->join('user_data','order_data.user_id = user_data.user_id')
                ->where('order_data.order_id',$id)
                ->get()
                ->result();
                foreach ($ss as $row) {
                    $name = $row->name;
                    $surename = $row->surename;
                    $user_id = $row->user_id;
                    $d_r = $row->date_to_request;
                    $d_u = $row->date_to_use;
                    $status = $row->order_status;
                } 
                $m =''; 
                $m .='<b>หมายเลขใบคำขอใช้สารเคมี : '.$id.'</b><i></i>';
                $m .='<br><br>';

                $m .='<b>รหัสผู้ใช้ : </b><i>'.$user_id.'</i>';
                $m .='<br><br>';
                $m .='<b>ชื่อใช้ : </b><i>'.$name."  ".$surename.'</i>';
                $m .='<br><br>';
                $m .='<b>วันที่ยื่นคำขอ : </b><i>'.$d_r .'</i>';
                $m .='<br><br>';
                $m .='<b>วันที่ใช้งาน : </b><i>'.$d_u.'</i>';
                $m .='<br><br>';
                $m .='<b>สถานะใบคำขอ : </b>';
                $m .='<i>';

                        if ($status == 0) {
                            $t = "รอการอนุมัติ";
                        }else if($status == 1){
                            $t = "ได้รับการอนุมัติแล้ว";
                        }else{
                            $t =  "ถูกยกเลิกรายการ";
                        }
                $m .= $t;
                $m .='</i>';
                $m .='<br><br>';


                $m .= '<table border="1" cellpadding="10" cellspacing="0">';

                $m .= '<thead  bgcolor="#cccccc">';
                    $m .= '<tr>';
                    $m .=   '<th>รหัสสารเคมี</th>';
                    $m .=   '<th>สูตรเคมี</th>';
                    $m .=   '<th>ชื่อสามัญ</th>';
                    $m .=   '<th>ปริมาณ</th>';
                    $m .=   '<th>หน่วย</th>';
                    $m .='</tr>';
                $m .='</thead>';
                $m .='<tbody>';

                $q = $this->db
                ->select('*')
                ->from('order_data')
                ->join('chemical_data' , 'order_data.chemical_id = chemical_data.id')
                ->join('volume_type_detail','order_data.volume_type = volume_type_detail.volume_type_id')
                ->where('order_data.order_id',$id)
                ->get()
                ->result();


                foreach($q as $row){
                    $m .= '<tr>';
                    $m .= '<td>'.$row->chemical_id.'</td>';
                    $m .= '<td>'.$row->formula.'</td>';
                    $m .= '<td>'.$row->name.'</td>';
                    $m .= '<td>'.$row->order_volume.'</td>';
                    $m .= '<td>'.$row->volume_name.'</td>';
                    $m .= '</tr>';
                    }


                $m .= '</tbody>';
                $m .= '</table>';

            // load libery
            $this->load->library('email', $config);

            /* newline */
            $this->email->set_newline("\r\n");

            /*  host Email */
            $this->email->from('iamwattanas@gmail.com');

            /*  client email */
            $this->email->to($_e);  

            /* subject */
            $this->email->subject('ยืนยันการขอใช้สารเคมีของคุณ');  

            /*  Body Text  */
            $this->email->message('อนุมัติใบคำขอใช้สารเคมีของคุณแล้ว<br><br>'.$m);

            /* send email */
            $result = $this->email->send();
            if ($result) {
                header("Content-type: text/html; charset=utf-8");
				echo "<script>alert('บันทึกการเปลี่ยนแปลงเสร็จสมบูรณ์')</script>";
				?>
					<meta http-equiv="refresh" content="0;URL=<?php echo site_url('main/close');?>">
				<?php
            }else{
                header("Content-type: text/html; charset=utf-8");
                echo "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่')</script>";

                ?>
                    <meta http-equiv="refresh" content="0;URL=<?php echo site_url('main/close');?>">
                <?php
            }

        }
    }