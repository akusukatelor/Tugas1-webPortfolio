document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const responseMsg = document.getElementById('responseMessage');

    fetch('process.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'email=' + encodeURIComponent(email)
    })
    .then(response => response.text())
    .then(data => {
        responseMsg.innerHTML = `<p style="color: #4ade80; margin-top: 15px;">${data}</p>`;
        document.getElementById('email').value = ''; // Reset input
    })
    .catch(error => {
        responseMsg.innerHTML = '<p style="color: #f87171;">Terjadi kesalahan.</p>';
    });
});