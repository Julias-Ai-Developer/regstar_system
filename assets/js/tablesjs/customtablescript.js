
     function searchNames() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(item => {
            const name = item.textContent.toLowerCase();
            item.style.display = name.includes(input) ? '' : 'none';
        })
    }

    //sorters

function sortTable(colIndex) {
  const table = document.getElementById("studentTable");
  const rows = Array.from(table.rows).slice(1); // exclude header
  let ascending = table.getAttribute(`data-sort-${colIndex}`) !== "asc";
  
  rows.sort((a, b) => {
    let aText = a.cells[colIndex].innerText.trim();
    let bText = b.cells[colIndex].innerText.trim();

    // Convert to numbers if both values are numeric
    if (!isNaN(aText) && !isNaN(bText)) {
      aText = parseFloat(aText);
      bText = parseFloat(bText);
    }

    return ascending ? (aText > bText ? 1 : -1) : (aText < bText ? 1 : -1);
  });

  // Update table
  rows.forEach(row => table.tBodies[0].appendChild(row));

  // Track sort direction
  table.setAttribute(`data-sort-${colIndex}`, ascending ? "asc" : "desc");
}

