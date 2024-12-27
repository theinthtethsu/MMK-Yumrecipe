$(document).ready(function() {
    const mobileBankingSelect = $('#mobile-banking');
    const receivingInfo = $('#receiving-info');
    const preview = $('#preview');
    const previewAccountName = $('#preview-account-name');
    const previewAccountNumber = $('#preview-account-number');
    const previewQrCode = $('#preview-qr-code');
    const paymentMethodElements = $('.payment-method');

    mobileBankingSelect.on('change', function() {
        const selectedValue = $(this).val();
        
        // Hide all payment method elements initially
        preview.addClass('hidden');
        receivingInfo.addClass('hidden');
        console.log(paymentMethodElements);

        if (selectedValue !== 'default') {
            // Show only the relevant payment method elements
            receivingInfo.removeClass('hidden');
            receivingInfo.each(function() {
                if ($(this).data('value') === selectedValue) {
                    $(this).removeClass('hidden');
                    const accountName = $(this).find('.account-name').val();
                    const phoneNumber = $(this).find('.phone-number').val();
                    const qrCodeSrc = $(this).find('.qr-code').attr('src');

                    // Update preview section
                    previewAccountName.text(accountName);
                    previewAccountNumber.text(phoneNumber);
                    previewQrCode.attr('src', qrCodeSrc);
                    preview.removeClass('hidden');
                }
            });
        }
    });
});