function showPersona(personaId) {
    // Sembunyikan semua konten persona
    document.querySelectorAll('.persona-content').forEach(content => {
      content.classList.add('hidden');
    });

    // Tampilkan konten persona yang dipilih
    document.getElementById(personaId).classList.remove('hidden');
  }
