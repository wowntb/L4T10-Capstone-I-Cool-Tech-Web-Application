<!DOCTYPE html>
<html lang="en">

<head>
    <title>Legal</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <x-alert />

    <h1>Cool Tech</h1>
    <div>
        <!-- This is the HTML that will be rendered for the terms of service page. -->
        @if ($subsection === "tos")
        <h2>Terms of Service</h2>
        <p>
            Welcome to Cool Tech! By accessing or using our website, you agree
            to comply with and be bound by the following terms and conditions.
            Please read them carefully.
        </p>

        <h3>Acceptance of Terms:</h3>
        <p>
            By using Cool Tech, you acknowledge that you have read, understood,
            and agree to be bound by these Terms of Service.
        </p>

        <h3>User Conduct:</h3>
        <p>
            Users are responsible for their actions on Cool Tech. Any use of the
            site that violates applicable laws or regulations is strictly prohibited.
        </p>

        <h3>Content:</h3>
        <p>
            Users are solely responsible for the content they post on Cool Tech.
            We reserve the right to remove any content that violates our policies.
        </p>

        <h3>Intellectual Property:</h3>
        <p>
            The content on Cool Tech, including but not limited to text, graphics,
            logos, and images, is protected by intellectual property laws. Users may
            not use, reproduce, or distribute content without proper authorization.
        </p>

        <h3>Contact Us:</h3>
        <p>
            If you have questions or concerns about our Privacy Policy, contact us at
            [contact@cooltech.com].
        </p>

        <!-- This is the HTML that will be rendered for the privacy page. -->
        @elseif ($subsection === "privacy")
        <h2>Privacy Policy</h2>
        <p>
            Welcome to Cool Tech! Your privacy is important to us. This Privacy Policy
            outlines how we collect, use, and protect your personal information.
        </p>

        <h3>Information We Collect:</h3>
        <p></p>

        <h3>How We Use Your Information:</h3>
        <p></p>

        <h3>Contact Us:</h3>
        <p>
            If you have questions or concerns about our Privacy Policy, contact us at
            [contact@cooltech.com].
        </p>

        <!-- This error message will be rendered if an invalid URI is used. -->
        @else
        <h2>This page does not exist.</h2>
        @endif
    </div>
    @include('footer')
</body>

</html>