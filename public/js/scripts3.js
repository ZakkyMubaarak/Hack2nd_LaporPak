document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
        // Tutup item FAQ lain yang terbuka
        document.querySelectorAll('.faq-item').forEach(faq => {
            if (faq !== item) {
                faq.classList.remove('open');
                faq.querySelector('.faq-answer').style.maxHeight = null;
            }
        });

        // Toggle kelas 'open' untuk item yang diklik
        item.classList.toggle('open');

        // Buat animasi smooth untuk jawaban FAQ
        const answer = item.querySelector('.faq-answer');
        if (item.classList.contains('open')) {
            answer.style.maxHeight = answer.scrollHeight + "px"; // Set tinggi maksimal ke tinggi konten
        } else {
            answer.style.maxHeight = null; // Kembalikan ke tinggi nol untuk menutup
        }
    });
});
