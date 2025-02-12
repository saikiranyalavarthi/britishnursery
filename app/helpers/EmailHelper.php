<?php

function send_email($form, $data) {
    $to = "hrwndr@codepanther.in"; // Change this email to admin email //
    // $to = "bin.admin@alarafah.org"; // Change this email to admin email //
    $subject = "New Entry On BIN Website By " . $data['name'];
    $header = "From: " . $data['email'];
    $header .= "\r\nReply-To: " . $data['email'];

    if ($form == "learn-more" || $form == "call-back") {
        $body = "You have received a new message from British Islamic Nursery website $form form.\n\nHere are the details:\n\nName: " . $data['name'] . "\n\nEmail: " . $data['email'] . "\n\nPhone: " . $data['phone'];

        if (!mail($to, $subject, $body, $header)) {
            return false;
        } else {
            return true;
        }
    } else if ($form == "contact") {
        $body = "You have received a new message from British Islamic Nursery website $form form.\n\nHere are the details:\n\nName: " . $data['name'] . "\n\nEmail: " . $data['email'] . "\n\nMessage: " . $data['message'];

        if (!mail($to, $subject, $body, $header)) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}
