//break; if letter 1 is equal to letter 2
        if($letter1 == $letter2){
            // echo "Letter1 is equal to letter2<br>";
            if($letter1 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter1 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter1 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter1 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter1 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter1 == $C) {
                $code[$i] = "C";
                $i += 1;
            }
            $stop += 1;
        }

        else{
            // echo "<br>Letter1 is not equal to letter2<br>";
            if($letter1 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter1 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter1 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter1 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter1 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter1 == $C) {
                $code[$i] = "C";
                $i += 1;
            } 
            $stop += 1;

        //break; if letter 2 is equal to letter3
        if($letter2 == $letter3){
            // echo "<br>Letter2 is equal to Letter3<br>";
            if($letter2 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter2 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter2 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter2 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter2 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter2 == $C) {
                $code[$i] = "C";
                $i += 1;
            } 
            $stop += 1;


            // break letter 4 and 5
            if($letter4 == $letter5 && $stop != 3){
            // echo "<br>Letter5 is equal to letter6<br>";
            if($letter4 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter4 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter4 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter4 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter4 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter4 == $C) {
                $code[$i] = "C";
                $i += 1;
            }
            $stop += 1;
        }
        elseif($stop != 3) {
            // echo "<br>Letter4 is not equal to letter5<br>";
            if($letter4 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter4 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter4 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter4 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter4 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter4 == $C) {
                $code[$i] = "C";
                $i += 1;
            } 
            $stop += 1;
        }

      
        }
        else {
            // echo "<br>Letter2 is not equal to letter3<br>";
            if($letter2 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter2 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter2 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter2 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter2 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter2 == $C) {
                $code[$i] = "C";
                $i += 1;
            }
            $stop += 1;

        }
        }

//break letter 3 and 4
        if($letter3 == $letter4 && $stop != 3){
            // echo "<br>Letter3 is equal to letter4 <br>";
            if($letter3 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter3 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter3 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter3 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter3 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter3 == $C) {
                $code[$i] = "C";
                $i += 1;
            }
            $stop += 1;
        }
        elseif($stop != 3){
            // echo "<br>Letter3 is not equal to letter4 <br>";
            if($letter3 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter3 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter3 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter3 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter3 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter3 == $C) {
                $code[$i] = "C";
                $i += 1;
            } 
            $stop += 1;

        // break letter 4 and 5
        if($letter4 == $letter5 && $stop != 3){
            // echo "<br>Letter5 is equal to letter6<br>";
            if($letter4 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter4 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter4 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter4 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter4 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter4 == $C) {
                $code[$i] = "C";
                $i += 1;
            }
            $stop += 1;
        }
        elseif($stop != 3){
            // echo "<br>Letter4 is not equal to letter5<br>";
        //break box3
            if($letter4 == $R) {
                $code[$i] = "R";
                $i += 1;
            }
            if($letter4 == $I) {
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter4 == $A) {
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter4 == $S) {
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter4 == $E) {
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter4 == $C) {
                $code[$i] = "C";
                $i += 1;
            } 
            $stop += 1;
        }
        }
    


// break letter 5 and 6
    if($letter5 == $letter6 && $stop != 3){
        // echo "<br>Letter5 is equal to letter6<br>";
        if($letter5 == $R) {
            $code[$i] = "R";
            $i += 1;
        }
        if($letter5 == $I) {
            $code[$i] = "I";
            $i += 1;
        } 
        if($letter5 == $A) {
            $code[$i] = "A";
            $i += 1;
        } 
        if($letter5 == $S) {
            $code[$i] = "S";
            $i += 1;
        } 
        if($letter5 == $E) {
            $code[$i] = "E";
            $i += 1;
        } 
        if($letter5 == $C) {
            $code[$i] = "C";
            $i += 1;
        } 
        $stop += 1;
    }
    elseif($stop != 3){
        // echo "<br>Letter5 is not equal to letter6<br>";
        if($letter5 == $R) {
            $code[$i] = "R";
            $i += 1;
        }
        if($letter5 == $I) {
            $code[$i] = "I";
            $i += 1;
        } 
        if($letter5 == $A) {
            $code[$i] = "A";
            $i += 1; 
        } 
        if($letter5 == $S) {
            $code[$i] = "S";
            $i += 1;
        } 
        if($letter5 == $E) {
            $code[$i] = "E";
            $i += 1;
        } 
        if($letter5 == $C) {
            $code[$i] = "C";
            $i += 1;
        } 
    }