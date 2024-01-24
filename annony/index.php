<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });

        // Disable console commands
        ['log', 'warn', 'error', 'debug'].forEach(function (command) {
            console[command] = function () {
                console.log('hmmm hmmm why are you here? have you gone through the guide???');
            };
        });
    </script>
    <title>HAHA</title>
</head>
<body>
<div id="loading-gif" class="hidden">
            <!-- Add your gif image here -->
            <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExeDUzeTN2cjlyN3Bhb3JhYmJiOGVtYnlqY2JqcmZxeWg2a3Zpa2Y4byZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/QBd2kLB5qDmysEXre9/giphy.gif" alt="Loading Gif">
        </div>
    <div id="loading-container">
        <div id="loading-bar">
            <div id="loading-progress"></div>
        </div>
        <div id="loading-text">0%</div>
    </div>
</body>
</html>
