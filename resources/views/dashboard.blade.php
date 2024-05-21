<x-layout.main>
    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-8-desktop is-12-tablet">
                    <h1>examens dit schooljaar</h1>
                    <table id="tabel">

                        <thead>
                        <tr>
                            <th colspan="5">

                            </th>
                        </tr>
                        </thead>
                        <tr>
                            <td>Periode</td>
                            <td>Cursus</td>
                            <td>EC</td>
                            <td>Examen</td>
                            <td>Cijfer</td>
                        </tr>
                        <tr>
                            <td rowspan="6">1</td>
                            <td>CU75001V3</td>
                            <td>2.5EC</td>
                            <td>Portfolio based
                                assessment</td>
                            <td>6,8</td>
                        </tr>
                        <tr>
                            <td>CU75002V2</td>
                            <td>5</td>
                            <td> written exam</td>
                            <td>7,6</td>
                        </tr>
                        <tr>
                            <td>CU75003V1</td>
                            <td>5</td>
                            <td>Case study exam</td>
                            <td>5,5</td>
                        </tr>
                        <tr>
                            <td>CU75068V1</td>
                            <td>12.5</td>
                            <td>Criterium focused
                                assessment</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CU75054V1</td>
                            <td>1.25</td>
                            <td>Portfolio</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CU75056V1</td>
                            <td>1.25</td>
                            <td>Portfolio</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>CU75004v1</td>
                            <td>10EC</td>
                            <td>presentation and Case study exam</td>
                            <td>6,3 en 7</td>
                        </tr>
                        <tr>
                            <td rowspan="2">3</td>
                            <td>CU75008V1</td>
                            <td>5EC</td>
                            <td>case study exam</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CU75009V3</td>
                            <td>7.5EC</td>
                            <td> Criterium focused
                                assesment</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan="3">4</td>
                            <td>CU75011V3</td>
                            <td>10EC</td>
                            <td>Criterium focused
                                assesment</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CU75055V1</td>
                            <td>1.25</td>
                            <td>Portfolio</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CU75057V1</td>
                            <td>1.25</td>
                            <td>Portfolio</td>
                            <td></td>
                        </tr>

                    </table>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                    <script>
                        function sumArrayUpTo(arrData, index) {
                            var total = 0;
                            for (var i = 0; i <= index; i++) {
                                if (arrData.length > i) {
                                    total += arrData[i];
                                }
                            }
                            return total;
                        }

                        function showBurnDown(elementId, burndownData, scopeChange = []) {

                            var speedCanvas = document.getElementById(elementId);

                            Chart.defaults.global.defaultFontFamily = "Arial";
                            Chart.defaults.global.defaultFontSize = 14;

                            const totalHoursInSprint = burndownData[0];
                            const idealHoursPerDay = totalHoursInSprint / 9;
                            i = 0;

                            var speedData = {
                                labels: ["periode 1", "periode 2", "periode 3", "periode 4"],
                                datasets: [
                                    {
                                        label: "Cijfer",
                                        data: burndownData,
                                        fill: false,
                                        borderColor: "#EE6868",
                                        backgroundColor: "#EE6868",
                                        lineTension: 0,
                                    },
                                    {
                                        label: "Ideal",
                                        borderColor: "#000000",
                                        backgroundColor: "#000000",
                                        lineTension: 0,
                                        borderDash: [5, 5],
                                        fill: false,
                                        data: [
                                            11.25, // 1
                                            22.50, // 2
                                            33.75, // 3
                                            45.00 // 4
                                        ]
                                    },
                                ]
                            };

                            var chartOptions = {
                                legend: {
                                    display: true,
                                    position: 'top',
                                    labels: {
                                        boxWidth: 100,
                                        fontColor: 'black'
                                    }
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            min: 0,
                                            max: 60
                                        }
                                    }]
                                }
                            };

                            var lineChart = new Chart(speedCanvas, {
                                type: 'line',
                                data: speedData,
                                options: chartOptions
                            });

                        }
                    </script>


                    <div style="width:800px;" id="chart"><canvas id="burndown43"></canvas></div>
                    <script>
                        showBurnDown(
                            "burndown43",
                            //   1    2    3    4    5    6    7    8    9  10
                            [12.5, 22.5, 0, 0,], // cijfers gehaald
                            [11.25, 22.5, 33.75, 45, 60]  // gemiddeld nodig
                        );
                    </script>
                </div>
            </div>
        </div>
    </section>
</x-layout.main>
