<?php
$nama_bulan = [
    1 => 'Jan',
    2 => 'Feb',
    3 => 'Mar',
    4 => 'Apr',
    5 => 'Mei',
    6 => 'Jun',
    7 => 'Jul',
    8 => 'Agu',
    9 => 'Sep',
    10 => 'Okt',
    11 => 'Nov',
    12 => 'Des'
];
?>

<div class="col-md-10 offset-md-1">
    <h4 class="text-center mb-4"><?= $title; ?></h4>
    <canvas id="penjualanChart" height="100"></canvas>
</div>

<!-- Chart.js dan plugin datalabels -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0"></script>

<script>
    const labels = [
        <?php foreach ($penjualan as $p): ?>
                '<?= $nama_bulan[(int) $p['bulan']] ?>',
        <?php endforeach; ?>
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Jumlah Penjualan',
            data: [
                <?php foreach ($penjualan as $p): ?>
                        <?= $p['total_penjualan'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Grafik Penjualan per Bulan',
                    font: {
                        size: 20
                    }
                },
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            const value = context.raw;
                            return 'Rp ' + value.toLocaleString('id-ID');
                        }
                    }
                },
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: function (value) {
                        return value.toLocaleString('id-ID');
                    },
                    font: {
                        weight: 'bold'
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function (value) {
                            return 'Rp ' + value.toLocaleString('id-ID');
                        }
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const ctx = document.getElementById('penjualanChart').getContext('2d');
    new Chart(ctx, config);
</script>