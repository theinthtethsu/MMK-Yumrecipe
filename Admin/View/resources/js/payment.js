const accountNameInput = document.getElementById('account-name-kpay');
const accountNumberInput = document.getElementById('phone-number-kpay');
const mobileBankingSelect = document.getElementById('mobile-banking');
const preview = document.getElementById('preview');
const receivingInfoElements = document.querySelectorAll('.mobile-banking-option');

accountNameInput.addEventListener('input', function() {
    document.getElementById('preview-account-name').textContent = this.value;
});

accountNumberInput.addEventListener('input', function() {
    document.getElementById('preview-account-number').textContent = this.value;
});


let selectedOption = null;

// Mobile Banking Selection
mobileBankingSelect.addEventListener('change', function() {
    const selectedValue = this.value;
    let logoSrc = '';

    // Hide all receiving info elements initially
    receivingInfoElements.forEach(element => {
        element.classList.add('hidden');
    });

    // If no option is selected, hide the logo preview
    if (selectedValue === 'default') {
        preview.classList.add('hidden');
    } else {
        preview.classList.remove('hidden');
        switch (selectedValue) {
            case 'kpay':
                logoSrc = '<?php echo $paymentlogo_path; ?>kpayLogo.png';
                selectedOption = {
                    label: 'KBZPAY',
                    logo: '<?php echo $paymentlogo_path; ?>kpayLogo.png',
                    account_name: 'Admin KPay',
                    phone_number: '0134343414',
                    qr_code: '<?php echo $paymentlogo_path; ?>kpayqr.png'
                };
                break;
            case 'wavepay':
                logoSrc = '<?php echo $paymentlogo_path; ?>wavepayLogo.png';
                selectedOption = {
                    label: 'WavePay',
                    logo: '<?php echo $paymentlogo_path; ?>wavepayLogo.png',
                    account_name: 'Admin WavePay',
                    phone_number: '0134343414',
                    qr_code: '<?php echo $paymentlogo_path; ?>wavepayqr.png'
                };
                break;
            case 'ayapay':
                logoSrc = '<?php echo $paymentlogo_path; ?>ayapayLogo.png';
                selectedOption = {
                    label: 'AYAPAY',
                    logo: '<?php echo $paymentlogo_path; ?>ayapayLogo.png',
                    account_name: 'Admin AYAPAY',
                    phone_number: '0134343414',
                    qr_code: '<?php echo $paymentlogo_path; ?>ayapayqr.png'
                };
                break;
        }
        // Show only the relevant receiving info elements
        receivingInfoElements.forEach(element => {
            if (element.dataset.value === selectedValue) {
                element.classList.remove('hidden');
            }
        });
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

// Proceed to Payment
function proceedToPayment() {
    const option1 = selectedOption.label;
    const option2 = selectedOption.phone_number;
    window.location.href = `payment.php?option1=${option1}&option2=${option2}`;
}