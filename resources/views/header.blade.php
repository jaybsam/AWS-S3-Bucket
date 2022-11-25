<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Image App</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.14/dist/css/uikit.min.css" />
    <style>
        html{
            min-height: 100%;
        }
        li.uk-item{
            border: 1px solid #e5e5e5;
            margin-bottom: 30px;
        }
        .uk-navbar-container:not(.uk-navbar-transparent){
            background: #fff !important;
            /* position: fixed; */
            top: 0;
            left: 0;
            right: 0;
        }
        /* .uk-section-primary{
            background: #0c0e10 !important;
        } */
    </style>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.14/dist/js/uikit-icons.min.js"></script>
</head>
<body>
    <header>
        <nav class="uk-navbar-container uk-background-default" uk-navbar>
            <div class="uk-navbar-center">

                <div class="uk-navbar-center-left">
                    <ul class="uk-navbar-nav">
                        
                        <li><a href="/">Front</a></li>
                    </ul>
                </div>
                <a class="uk-navbar-item uk-logo" href="#">S3-DEMO</a>
                <div class="uk-navbar-center-right">
                    <ul class="uk-navbar-nav">
                        <li><a href="/upload">Upload</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>