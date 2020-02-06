<!doctype html>
<html><head>
    <title>MGW - form errors</title>
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
<h1>Errors in data for enquiry form</h1>

<div class="alert alert-danger" role="alert">
    Sorry, there was a problem with your form submission:

    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
</div>
