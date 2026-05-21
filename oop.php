<?php

class StudentResult {
    private $filename;

    // কনস্ট্রাক্টর: ফাইলের নাম সেট করার জন্য
    public function __construct($file) {
        $this->filename = $file;
    }

    // মেথড: নতুন শিক্ষার্থীর তথ্য ফাইলে যোগ করার জন্য
    public function addStudent($id, $name, $score, $grade) {
        // ডেটাগুলোকে একটি স্ট্রিং হিসেবে সাজানো
        $data = "ID: $id | Name: $name | Score: $score | Grade: $grade" . PHP_EOL;
        
        // FILE_APPEND ব্যবহার করা হয়েছে যাতে আগের ডেটা মুছে না যায়
        if (file_put_contents($this->filename, $data, FILE_APPEND)) {
            echo "সাফল্যের সাথে তথ্য যুক্ত হয়েছে!<br>";
        } else {
            echo "তথ্য সংরক্ষণ করতে সমস্যা হয়েছে।<br>";
        }
    }

    // মেথড: আইডি বা নাম দিয়ে রেজাল্ট খোঁজার জন্য
    public function findResult($searchQuery) {
        if (!file_exists($this->filename)) {
            echo "কোনো ডেটা ফাইল পাওয়া যায়নি।";
            return;
        }

        $lines = file($this->filename);
        $found = false;

        echo "<h3>অনুসন্ধানের ফলাফল ($searchQuery):</h3>";
        foreach ($lines as $line) {
            // কেস-ইনসেনসিটিভ সার্চ (বড় বা ছোট হাতের অক্ষর গ্রাহ্য করবে না)
            if (stripos($line, $searchQuery) !== false) {
                echo $line . "<br>";
                $found = true;
            }
        }

        if (!$found) {
            echo "এই আইডি বা নামে কোনো তথ্য পাওয়া যায়নি।";
        }
    }
}

// --- ব্যবহারের উদাহরণ ---

// ১. ক্লাসের একটি অবজেক্ট তৈরি করা
$studentSystem = new StudentResult("results.txt");

// ২. নতুন শিক্ষার্থীর তথ্য ইনপুট দেওয়া (এটি আপনি ফর্ম থেকেও নিতে পারেন)
$studentSystem->addStudent("101", "Arif Hossain", "85", "A+");
$studentSystem->addStudent("102", "Munna", "72", "A-");

echo "<hr>";

// ৩. আইডি বা নাম দিয়ে রেজাল্ট দেখা
$studentSystem->findResult("101"); // আইডি দিয়ে সার্চ
$studentSystem->findResult("Arif"); // নাম দিয়ে সার্চ

?>