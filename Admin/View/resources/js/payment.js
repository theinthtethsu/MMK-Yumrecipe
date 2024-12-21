const paymentlogo_path = "<?php echo '/yumrecipe/Admin/View/resources/images/PaymentLogo/'; ?>";

const mobileBankingSelect = document.getElementById('mobile-banking');
const logoPreview = document.getElementById('logo-preview');


// Mobile Banking Selection
mobileBankingSelect.addEventListener('change', function() {
    const selectedValue = this.value;
    let logoSrc = '';

    if (selectedValue === 'default') {
        logoPreview.classList.add('hidden');
    } else {
        logoPreview.classList.remove('hidden');
        logoSrc = `${paymentlogo_path}kpayLogo.png`;
    }

    logoPreview.src = logoSrc;
});

// Show Payment Modal
function showPaymentModal() {
    document.getElementById('paymentModal').classList.remove('hidden');
}

// Close Payment Modal
function closePaymentModal() {
    document.getElementById('paymentModal').classList.add('hidden');
}