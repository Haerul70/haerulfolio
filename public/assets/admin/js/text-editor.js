// // Inisialisasi Quill untuk masing-masing elemen dengan ID yang berbeda
// const quillBioAbout = new Quill('#editor-bio-about', {
//     theme: 'snow'
// });

// const quillAddressAbout = new Quill('#editor-address-about', {
//     theme: 'snow'
// });

// const quillBioAboutEdit = new Quill('#editor-bio-about-edit', {
//     theme: 'snow'
// });

// const quillAddressAboutEdit = new Quill('#editor-address-about-edit', {
//     theme: 'snow'
// });

// const quillDescriptionService = new Quill('#editor-description-service', {
//     theme: 'snow'
// });

// const quillDescriptionServiceEdit = new Quill('#editor-description-service-edit', {
//     theme: 'snow'
// });

// const quillDescriptionExperience = new Quill('#editor-description-experience', {
//     theme: 'snow'
// });

// const quillDescriptionExperienceEdit = new Quill('#editor-description-experience-edit', {
//     theme: 'snow'
// });

// const quillDescriptionEducation = new Quill('#editor-description-education', {
//     theme: 'snow'
// });

// const quillDescriptionEducationEdit = new Quill('#editor-description-education-edit', {
//     theme: 'snow'
// });

// // Fungsi untuk menyimpan konten Quill ke input hidden sebelum submit
// function handleFormSubmit(quill, hiddenInputId) {
//     const hiddenInput = document.querySelector(`#${hiddenInputId}`);
//     hiddenInput.value = quill.root.innerHTML; // Simpan konten HTML ke input hidden
// }

// // Tambahkan event listener pada form yang berhubungan dengan masing-masing Quill editor
// document.getElementById('formBioAbout').onsubmit = function() {
//     handleFormSubmit(quillBioAbout, 'hidden-bio-about');
// };

// document.getElementById('formAddressAbout').onsubmit = function() {
//     handleFormSubmit(quillAddressAbout, 'hidden-address-about');
// };

// document.getElementById('formBioAboutEdit').onsubmit = function() {
//     handleFormSubmit(quillBioAboutEdit, 'hidden-bio-about-edit');
// };

// document.getElementById('formAddressAboutEdit').onsubmit = function() {
//     handleFormSubmit(quillAddressAboutEdit, 'hidden-address-about-edit');
// };

// document.getElementById('formDescriptionService').onsubmit = function() {
//     handleFormSubmit(quillDescriptionService, 'hidden-description-service');
// };

// document.getElementById('formDescriptionServiceEdit').onsubmit = function() {
//     handleFormSubmit(quillDescriptionServiceEdit, 'hidden-description-service-edit');
// };

// document.getElementById('formDescriptionExperience').onsubmit = function() {
//     handleFormSubmit(quillDescriptionExperience, 'hidden-description-experience');
// };

// document.getElementById('formDescriptionExperienceEdit').onsubmit = function() {
//     handleFormSubmit(quillDescriptionExperienceEdit, 'hidden-description-experience-edit');
// };

// document.getElementById('formDescriptionEducation').onsubmit = function() {
//     handleFormSubmit(quillDescriptionEducation, 'hidden-description-education');
// };

// document.getElementById('formDescriptionEducationEdit').onsubmit = function() {
//     handleFormSubmit(quillDescriptionEducationEdit, 'hidden-description-education-edit');
// };

//  tinymce.init({
//         selector: '.mytextarea'
// });

tinymce.init({
    selector: 'textarea',
    plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Your account includes a free trial of TinyMCE premium features
        // Try the most popular premium features until Oct 6, 2024:
        'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
});