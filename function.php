<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "views/head.html";
    include "scripts/function/datapoints.php"
    ?>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Function e^x"
                },
                data: [{
                    type: "spline",
                    xValueType: "float",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });

            chart.render();
        }
    </script>
</head>

<body>
    <?php
    include "views/top-header.html"
    ?>

    <section id="proiecte">
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </section>

    <?php
    include "views/bottom-footer.html"
    ?>
</body>

</html>