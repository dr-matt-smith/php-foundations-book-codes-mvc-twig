<!doctype html>
<html><head>
    <title>MGW - confirmed enquiry</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  >
</head>

<body class="container">
<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link" href="/index.php">home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/index.php?action=contact">contact details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/index.php?action=enquiryForm">submit an enquiry</a>
    </li>
</ul>
<h1>Enquiry received</h1>
<p>
Thanks your for your enquiry - we aim to respond within 2 working days.
<p>Data received:

<div class="form-group">
    <label for="exampleInputEmail1">Your name</label>
    <input class="form-control" value="<?= $customerName ?>" readonly>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input class="form-control" value="<?= $customerEmail ?>" readonly>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Your enquiry</label>
    <textarea class="form-control" rows="3" readonly><?= $enquiry ?></textarea>
</div>
