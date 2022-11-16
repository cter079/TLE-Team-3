<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chatbot in PHP | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="phone">
        <img class="wrapper" src="https://media1.popsugar-assets.com/files/thumbor/l0S8NDGEb_M7mTeOvh2xXP9H2aI/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2020/09/23/911/n/1922507/33fff363faf1f015_eberhard-grossgasteiger-jCL98LGaeoE-unsplash/i/Pastel-Sky-iPhone-Wallpaper.jpg" />
        <button class="home-button"  onclick="window.location.href='index.php';"></button>

        <button class="appy-button"><img class="gAppy" src="https://i.postimg.cc/Bbvv7jf4/gappie.png"/><a href="bot.php">Appy</a></button>
    </div>
    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

</body>

</html>
