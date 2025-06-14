<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQs - Novage Care</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/logo0.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container py-5">
    <h1 class="mb-4 text-center">Frequently Asked Questions (FAQs)</h1>

    <div class="accordion" id="faqAccordion">
        @php $faqs = [
            ['q' => 'What services does Novage Care offer?', 'a' => 'Novage Care provides comprehensive health consultations, nutritional support, and general nurturing services for elderly individuals in Tanzania. Our goal is to enhance the quality of life for aging adults through personalized care.'],
            ['q' => 'Who can benefit from Novage Care services?', 'a' => 'Our services are designed for elderly individuals in Tanzania who need health support, nutritional guidance, or companionship. We also work with family members seeking trusted care options for their loved ones.'],
            ['q' => 'How do I schedule a health consultation?', 'a' => 'You can schedule a health consultation by contacting us through our website or calling our helpline. Our team will arrange a convenient time with a qualified healthcare professional.'],
            ['q' => 'What types of nutritional support are available?', 'a' => 'We offer personalized dietary plans, nutritional counseling, and supplementation advice tailored to the specific needs of elderly individuals to promote health and well-being.'],
            ['q' => 'Are your caregivers trained and qualified?', 'a' => 'Yes, our caregivers are trained professionals with experience in elderly care, health monitoring, and nutritional support to ensure safe and compassionate service.'],
            ['q' => 'How do I get started with Novage Care?', 'a' => 'Simply reach out via our website or contact number to discuss your needs. We will then develop a customized care plan suited to the individual’s health status and preferences.'],
            ['q' => 'Do you provide in-home care services?', 'a' => 'Yes, we offer in-home care services to ensure comfort and convenience for our clients, allowing elderly individuals to receive care in the familiar surroundings of their homes.'],
            ['q' => 'How is privacy and confidentiality maintained?', 'a' => 'We prioritize the privacy and dignity of our clients. All personal health information is handled with strict confidentiality in accordance with applicable laws and ethical standards.'],
            ['q' => 'What is the cost of your services?', 'a' => 'Costs vary depending on the type of services required and the duration of care. Please contact us directly for a detailed quotation tailored to your needs.'],
            ['q' => 'How can I contact Novage Care for more information?', 'a' => 'You can reach us through our website contact form, email, or phone number listed on the "Contact Us" page. Our team is ready to assist you.']
        ]; @endphp

        @foreach($faqs as $index => $faq)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $index }}">
                    <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}">
                        {{ $index + 1 }}. {{ $faq['q'] }}
                    </button>
                </h2>
                <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        {{ $faq['a'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
