$(".tab-wizard2").steps({
    headerTag: "h5",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> <span class="info">#title#</span>',
    // Menggunakan properti commands untuk mengatur tombol-tombol
    commands: {
        // Menghapus tombol "Finish (Submit)"
        finish: null,
        // Menyesuaikan teks tombol "Next" dan "Previous"
        next: "Next",
        previous: "Previous"
    },
    onStepChanged: function(event, currentIndex, priorIndex) {
        $('.steps .current').prevAll().addClass('disabled');
    },
    onFinished: function(event, currentIndex) {
        $('#success-modal-btn').trigger('click');
    }
});
