<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
    
    </head>
    <body>
    <h1>คำนวณค่าเสื่อมราคาของสินทรัพย์(แบบเส้นตรง)</h1>
        <form action="welcome" method="get">
           <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">ราคาทุนของสินทรัพย์</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input is-normal" type="text" name="price">
                    </div>
                </div>
            </div>
            <div class="field-label is-normal">
                <label class="label">อายุการใช้งาน</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input is-normal" type="text" name="age" >
                    </div>
                </div>
            </div>
            <div class="field-label is-normal">
                <label class="label">ราคาซาก</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input is-normal" type="text" name="sale">
                    </div>
                </div>
            </div>
            </div>
          <input type="submit" value="submit" class="button is-success">  
        </form> 
        <div name="avg"></div>
        <div name="answer"></div>
    </body>
</html>
