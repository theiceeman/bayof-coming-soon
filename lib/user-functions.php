<?php
// require_once('basic-function.php');
class user extends basicFunction
{
    use table_names;

    public function create($firstname, $lastname, $email, $phone)
    {
        $vals = [$firstname, $lastname, $email, $phone];
        $if_empty = $this->if_empty($vals);
        if (!$if_empty) {
            return $this->errorMsgs(1);
        }

        // valid email
        $valid_email = $this->validate_email($email);
        if (!$valid_email) {
            return $this->errorMsgs(18);
        }

        $if_exist_email = $this->selectWhereDlt($this->user_tb, 'email', $email);
        // return $if_exist_email;
        if (count($if_exist_email) > 0) {
            return $this->errorMsgs(8);
        }

        $unique_id = $this->rand_id();
        $date_created = $this->todayDate();
        $query = "INSERT INTO $this->user_tb VALUES (null,
        '" . mysqli_real_escape_string($this->connectDb(), $unique_id) . "',
        '" . mysqli_real_escape_string($this->connectDb(), $email) . "',
        '" . mysqli_real_escape_string($this->connectDb(), $firstname) . "',
        '" . mysqli_real_escape_string($this->connectDb(), $lastname) . "',
        '" . mysqli_real_escape_string($this->connectDb(), 'null') . "',
        '" . mysqli_real_escape_string($this->connectDb(), $phone) . "',
        '" . mysqli_real_escape_string($this->connectDb(), 'null') . "',
        '" . mysqli_real_escape_string($this->connectDb(), 1) . "',
        '" . mysqli_real_escape_string($this->connectDb(), 1) . "',
        '" . mysqli_real_escape_string($this->connectDb(), 'null') . "',
        '" . mysqli_real_escape_string($this->connectDb(), 'null') . "',
        '" . mysqli_real_escape_string($this->connectDb(), '0') . "',
        '" . mysqli_real_escape_string($this->connectDb(), $date_created) . "',
        '" . mysqli_real_escape_string($this->connectDb(), $date_created) . "') ";
        mysqli_close($this->connectDb());
        if ($this->sqlQuery($query)) {
            $msg = 'Congratulations ' . ucwords($firstname) . '! You\'ll be contacted first, once we launch.';
            return ['error' => 0, 'msg' => $msg];
        } else {
            return $this->errorMsgs(14);
        }
    }

    public function countdown()
    {
        //A: RECORDS TODAY'S Date And Time
        $today = time();

        //B: RECORDS Date And Time OF YOUR EVENT
        $event = mktime(0, 0, 0, 8, 15, 2021);

        //C: COMPUTES THE DAYS UNTIL THE EVENT.
        $countdown = round(($event - $today) / 86400);

        //D: DISPLAYS COUNTDOWN UNTIL EVENT
        return $countdown;
    }
}
$user = new user();
