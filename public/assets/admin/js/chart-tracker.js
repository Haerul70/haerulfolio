const ctx = document.getElementById('myChart');

// Fungsi untuk mengambil data pengunjung
async function fetchVisitorData(filter) {
  const response = await fetch(`/get-visitor-data?filter=${filter}`);
  const data = await response.json(); // Pastikan server mengembalikan data dalam format JSON
  return data; // Kembalikan data yang diterima
}

// Fungsi untuk membuat chart
async function createChart(filter) {
  const visitorData = await fetchVisitorData(filter);
  
  // Misalkan visitorData adalah array dari jumlah pengunjung
  const labels = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']; // Ganti sesuai kebutuhan
  const data = {
    labels: labels,
    datasets: [{
      label: 'Jumlah Pengunjung',
      data: visitorData, // Data pengunjung dari server
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  // Konfigurasi chart
  const config = {
    type: 'bar', // Jenis chart
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true // Mulai sumbu Y dari nol
        }
      }
    },
  };

  // Inisialisasi chart
  const myChart = new Chart(ctx, config);
}

// Panggil fungsi createChart dengan filter yang diinginkan
createChart('daily'); // Ganti dengan filter sesuai kebutuhan
