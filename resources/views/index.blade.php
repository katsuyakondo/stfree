<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/globals.css" />
</head>

<body>
    <div class="android-large">
        <div class="overlap">

            <div class="rectangle"></div>
            <img class="element" src="image/logo.png" />
            <div class="div">嫌な気持ちをすべてぶつけてみて！!<br />なんでも言って！</div>
            <div class="group">
                <div class="overlap-group-wrapper">
                    <div class="overlap-group">
                        <div class="div-wrapper">
                      <a href="{{ route('voice.page2') }}" class="text-wrapper-2">声でぶつけてみる</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="group-wrapper">
                <div class="overlap-group-wrapper">
                    <div class="div-wrapper">
                        <a href="textinput.blade.php" class="text-wrapper-3">テキストでぶつけてみる</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>