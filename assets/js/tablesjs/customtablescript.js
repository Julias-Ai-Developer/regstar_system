
     function searchNames() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(item => {
            const name = item.textContent.toLowerCase();
            item.style.display = name.includes(input) ? '' : 'none';
        })
    }
