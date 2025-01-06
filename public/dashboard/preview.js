function updateSelectedCount() {
    // Get all checkboxes
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Count the checked checkboxes
    const selectedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;

    if(selectedCount == 4){
        
    }

    // Update the count in the span
    document.getElementById('selectedCount').textContent = selectedCount;
}
