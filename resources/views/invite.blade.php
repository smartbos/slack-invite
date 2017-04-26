<!DOCTYPE html>
<html>
    <head>
        <title>Modern PHP User Group 슬랙 초대 신청</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
            .content {
                text-align:center;
                margin-top:30px;
                font-family: 'Noto Sans';
            }

            .title {
                margin-bottom:30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    <h1>Modern PUG<br />Slack 초대 요청</h1>
                </div>
                <div class="raw">
                   <div class="col-md-6 col-md-offset-3">

                <form action="/" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-default" type="submit" value="초대 요청">
                        </div>
                    </form>
</div>
</div>            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>

