<?php
class Edit
{
    public function users($db,$id,$post,$text1,$text2,$text3){
        if ( $text1 <> null && $text1 <> null && $text3 <> null) {
        $updateRow = $db->updateRow("UPDATE users SET login = ?, password = ?, position = ? WHERE id = ?", [$text1, $text2, $text3, "$id"]);
   return;
        }

    }
        public function workstation($db,$id,$post,$text1,$text2,$text3){
        if ( $text1 <> null && $text1 <> null && $text3 <> null) {
        $updateRow = $db->updateRow("UPDATE workstation SET workstation = ?, component1 = ?, component2 = ? WHERE id = ?", [$text1, $text2, $text3, "$id"]);
   return;
        }
    }
        public function ts($db,$id,$post,$text1){
        if ( $text1 <> null) {
        $updateRow = $db->updateRow("UPDATE ts SET name = ? WHERE id = ?", [$text1, "$id"]);
   return;
        }
    }
        public function status_maintenance($db,$id,$post,$text1){
        if ( $text1 <> null) {
        $updateRow = $db->updateRow("UPDATE status_maintenance SET status = ? WHERE id = ?", [$text1, "$id"]);
   return;
        }
    }

    public function responsible_for_commissioning($db,$id,$post,$text1,$text2,$text3){
        if ( $text1 <> null && $text1 <> null && $text3 <> null) {
        $updateRow = $db->updateRow("UPDATE responsible_for_commissioning SET full_name = ?, profession = ?, job = ? WHERE id = ?", [$text1, $text2, $text3, "$id"]);
   return;
        }
    }
    public function location($db,$id,$post,$text1,$text2){
        if ( $text1 <> null && $text1 <> null) {
        $updateRow = $db->updateRow("UPDATE location SET branch = ?, address = ? WHERE id = ?", [$text1, $text2, "$id"]);
   return;
        }
    }

            public function technical_mean($db,$id,$post,$text1,$text2,$text3,$text4,$text5){
        if ( $text1 <> null && $text1 <> null && $text3 <> null) {
        $updateRow = $db->updateRow("UPDATE technical_mean SET name = ?, model = ?, serial_number = ?, inventary_number = ?, release_year = ?, start_exploitation = ?, option1 = ?, option2 = ?, option3 = ?, option4 = ?, option5 = ?, option6 = ?, option7 = ?, option8 = ?, option9 = ?, status = ? WHERE id = ?", [$text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8, $text9, $text10, $text11, $text12, $text13, $text14, $text15, $text16, "$id"]);
   return;
        }

    }

            public function plan_maintenance($db,$id,$post,$text1,$text2,$text3){
        if ( $text1 <> null && $text1 <> null && $text3 <> null) {
        $updateRow = $db->updateRow("UPDATE plan_maintenance SET technical_means = ?, date_plan = ?, status = ? WHERE id = ?", [$text1, $text2, $text3, "$id"]);
   return;
        }

    }

}
?>