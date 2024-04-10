let sortSelect = document.getElementById('sort');
sortSelect.addEventListener('change', function () {
    let selectedSort = this.value;
    window.location.href = 'product-api.php?sort=' + selectedSort;
});