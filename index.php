<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abbas Hussain - Full Stack Developer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #667eea;
            margin-bottom: 20px;
        }

        .name {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 10px;
        }

        .tagline {
            font-size: 1.2em;
            color: #667eea;
            margin-bottom: 20px;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .section-title {
            color: #667eea;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .skill-category h3 {
            color: #333;
            margin-bottom: 10px;
        }

        .skill-list {
            list-style: none;
        }

        .skill-list li {
            background: #f8f9fa;
            padding: 8px 15px;
            margin-bottom: 8px;
            border-radius: 20px;
            border-left: 4px solid #667eea;
        }

        .project {
            margin-bottom: 25px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 5px solid #667eea;
        }

        .project-title {
            color: #333;
            font-size: 1.3em;
            margin-bottom: 10px;
        }

        .project-tech {
            color: #667eea;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #764ba2;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .contact-info {
                flex-direction: column;
                align-items: center;
            }
            
            .name {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <!-- Aap yahan apni photo daal sakte hain -->
            <div class="name">Abbas Hussain</div>
            <div class="tagline">Full-Stack Web Developer & SEO Specialist</div>
            <div class="contact-info">
                <div class="contact-item">📍 Islamabad, Pakistan</div>
                <div class="contact-item">📞 +92 322 5188234</div>
                <div class="contact-item">📧 abbaswebdevelopment@gmail.com</div>
            </div>
            <div class="contact-info">
                <a href="https://github.com/abbaswebdeveloper" class="btn">GitHub</a>
                <a href="http://abbashussain.great-site.net" class="btn">Portfolio</a>
                <a href="https://linkedin.com/in/your-profile" class="btn">LinkedIn</a>
            </div>
        </header>

        <!-- Professional Summary -->
        <section class="section">
            <h2 class="section-title">PROFESSIONAL SUMMARY</h2>
            <p>Results-driven Full-Stack Developer specializing in PHP, Laravel, and React.js. Experienced in building secure, scalable web applications with expertise in Linux server management. Developed KingFF Faucet - a complete cryptocurrency ecosystem with advanced security and ad management systems. Passionate about clean code and innovative solutions.</p>
        </section>

        <!-- Technical Skills -->
        <section class="section">
            <h2 class="section-title">TECHNICAL SKILLS</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Frontend</h3>
                    <ul class="skill-list">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript (ES6+)</li>
                        <li>React.js</li>
                        <li>Bootstrap</li>
                        <li>Tailwind CSS</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Backend</h3>
                    <ul class="skill-list">
                        <li>PHP (OOP)</li>
                        <li>Laravel</li>
                        <li>Node.js</li>
                        <li>RESTful APIs</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Databases & Tools</h3>
                    <ul class="skill-list">
                        <li>MySQL</li>
                        <li>MongoDB</li>
                        <li>Git</li>
                        <li>GitHub</li>
                        <li>Linux/Ubuntu</li>
                        <li>VS Code</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Professional Experience -->
        <section class="section">
            <h2 class="section-title">PROFESSIONAL EXPERIENCE</h2>
            <div class="project">
                <div class="project-title">Freelance Full-Stack Developer | 2022 - Present</div>
                <ul>
                    <li>Developed KingFF Faucet cryptocurrency platform serving 500+ daily users with secure transactions</li>
                    <li>Built 10+ client websites including e-commerce stores and business portfolios</li>
                    <li>Implemented SEO strategies increasing organic traffic by 60% for multiple clients</li>
                    <li>Automated deployment processes on VPS achieving 99.9% uptime</li>
                </ul>
            </div>
        </section>

        <!-- Key Projects -->
        <section class="section">
            <h2 class="section-title">KEY PROJECTS</h2>
            
            <div class="project">
                <div class="project-title">KingFF FTP - Web-Based FTP Client Solution</div>
                <div class="project-tech">Technologies: PHP, JavaScript, FTP Protocol, OAuth, MySQL, Bootstrap</div>
                <ul>
                    <li>Developed secure web-based FTP client enabling remote server file management</li>
                    <li>Implemented OAuth 2.0 (Google Login) and email verification for enhanced security</li>
                    <li>Built real-time file operations: upload, download, delete, and directory management</li>
                    <li>Integrated reCAPTCHA and session security to prevent unauthorized access</li>
                </ul>
                <a href="http://kingffftp.unaux.com" class="btn">Live Demo</a>
            </div>

            <div class="project">
                <div class="project-title">KingFF Faucet - Cryptocurrency Reward Platform</div>
                <div class="project-tech">Technologies: PHP, MySQL, JavaScript, Bootstrap, AJAX</div>
                <ul>
                    <li>Secure user authentication system with timer-based rewards</li>
                    <li>Admin control panel with user management and analytics</li>
                    <li>Referral system and secure withdrawal processing</li>
                    <li>SQL injection prevention and XSS protection</li>
                </ul>
            </div>

            <div class="project">
                <div class="project-title">E-Commerce Website with Payment Integration</div>
                <div class="project-tech">Technologies: PHP, MySQL, JavaScript, Bootstrap</div>
                <ul>
                    <li>Shopping cart functionality with secure payment gateway</li>
                    <li>Inventory management system with admin panel</li>
                    <li>User reviews and rating system</li>
                </ul>
            </div>
        </section>

        <!-- Education & Certifications -->
        <section class="section">
            <h2 class="section-title">EDUCATION & CERTIFICATIONS</h2>
            <ul>
                <li>Responsive Web Design Certification - freeCodeCamp</li>
                <li>SEO & Digital Marketing - Google Digital Garage</li>
                <li>Web Development Bootcamp - Udemy</li>
                <li>Currently pursuing higher education</li>
            </ul>
        </section>

        <!-- Soft Skills -->
        <section class="section">
            <h2 class="section-title">SOFT SKILLS</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <ul class="skill-list">
                        <li>Problem Solving</li>
                        <li>Client Communication</li>
                        <li>Time Management</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <ul class="skill-list">
                        <li>Adaptability</li>
                        <li>Team Collaboration</li>
                        <li>Analytical Thinking</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Languages -->
        <section class="section">
            <h2 class="section-title">LANGUAGES</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <ul class="skill-list">
                        <li>Urdu (Native)</li>
                        <li>Pashto (Native)</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <ul class="skill-list">
                        <li>English (Fluent)</li>
                        <li>Punjabi (Conversational)</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</body>
</html>