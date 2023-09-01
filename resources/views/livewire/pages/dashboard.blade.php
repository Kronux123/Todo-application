<div>
    <div class="container-fluid p-3 mt-3 rounded " style="height: 100vh">

        <div>
            <canvas id="myChart"></canvas>
        </div>

    </div>
</div>





<script>
    document.addEventListener('livewire:navigated', () => {
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Changes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })
</script>
