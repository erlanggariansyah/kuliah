<?php

    function cekGrade() {
        echo "Input nilai: \n";
        $nilai = trim(fgets(STDIN));

        if ($nilai <= 60) {
            echo "Grade = F\n";
            echo "Lagi?\n";
            echo "Ketik apa saja jika ya: \n";
            $isYes = trim(fgets(STDIN));

            if ($isYes) {
                cekGrade();
            }
        } else if ($nilai <= 70) {
            echo "Grade = D\n";
            echo "Lagi?\n";
            echo "Ketik apa saja jika ya: \n";
            $isYes = trim(fgets(STDIN));

            if ($isYes) {
                cekGrade();
            }
        } else if ($nilai <= 80) {
            echo "Grade = C\n";
            echo "Lagi?\n";
            echo "Ketik apa saja jika ya: \n";
            $isYes = trim(fgets(STDIN));

            if ($isYes) {
                cekGrade();
            }
        } else if ($nilai <= 90) {
            echo "Grade = B\n";
            echo "Lagi?\n";
            echo "Ketik apa saja jika ya: \n";
            $isYes = trim(fgets(STDIN));

            if ($isYes) {
                cekGrade();
            }
        } else {
            echo "Grade = A\n";
            echo "Lagi?\n";
            echo "Ketik apa saja jika ya: \n";
            $isYes = trim(fgets(STDIN));

            if ($isYes) {
                cekGrade();
            }
        }
    }

    cekGrade();
    