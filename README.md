# Jahongir Travel Website

A professional travel website for Jahongir Travel, offering tours and travel services in Uzbekistan and Central Asia.

## 🏗️ Project Structure

```
jahongir-trave-001/
├── assets/                 # CSS, JS, fonts, images
├── images/                 # Website images and media
├── includes/               # PHP includes (header, footer, etc.)
├── tours-from-bukhara/     # Tours from Bukhara
├── tours-from-khiva/       # Tours from Khiva  
├── tours-from-samarkand/   # Tours from Samarkand
├── uzbekistan-tours/       # Uzbekistan tour packages
├── tajikistan-tours/       # Tajikistan tours
├── uzbekistan/             # Uzbekistan specific pages
├── phpmailer/              # Email functionality
├── index.php               # Homepage
├── aboutus.php             # About page
├── contact.php             # Contact page
├── sitemap.xml             # SEO sitemap
├── robots.txt              # Search engine directives
└── composer.json           # PHP dependencies
```

## 🚀 Features

- **Clean URL Structure** - SEO-friendly URLs without .php extensions
- **Responsive Design** - Mobile-friendly layout
- **Tour Management** - Organized tour categories by departure city
- **Contact Forms** - Email functionality with PHPMailer
- **SEO Optimized** - Meta tags, sitemaps, and structured data
- **Multi-language Support** - Ready for internationalization

## 🛠️ Technology Stack

- **Backend:** PHP 8.2+
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap
- **Email:** PHPMailer
- **Dependencies:** Composer
- **Router:** nikic/fast-route (planned)
- **Server:** Apache with mod_rewrite

## 📋 Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/jahongir-travel.git
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Configure web server:**
   - Point document root to project directory
   - Ensure mod_rewrite is enabled
   - Set up virtual host (optional)

4. **Configure email (optional):**
   - Update SMTP settings in `phpmailer/` configuration
   - Test contact forms

## 🌐 URL Structure

### Current URLs
- `/` - Homepage
- `/aboutus.php` - About page
- `/contact.php` - Contact page
- `/uzbekistan-tours/` - Uzbekistan tours
- `/tours-from-samarkand/` - Samarkand tours
- `/tours-from-bukhara/` - Bukhara tours
- `/tours-from-khiva/` - Khiva tours

### Planned Clean URLs
- `/about/` - About page
- `/contact/` - Contact page
- `/tours/uzbekistan/` - Uzbekistan tours
- `/tours/samarkand/` - Samarkand tours
- `/tours/bukhara/` - Bukhara tours
- `/tours/khiva/` - Khiva tours

## 🔧 Development

### Local Development Setup
1. Use XAMPP, WAMP, or similar local server
2. Clone repository to htdocs directory
3. Access via `http://localhost/jahongir-trave-001/`

### Git Workflow
```bash
# Create feature branch
git checkout -b feature/new-feature

# Make changes and commit
git add .
git commit -m "Add new feature"

# Push to GitHub
git push origin feature/new-feature

# Create pull request on GitHub
```

## 📊 SEO Features

- **Meta Tags** - Title, description, keywords
- **Structured Data** - JSON-LD schema markup
- **Sitemap** - XML sitemap for search engines
- **Robots.txt** - Search engine crawling directives
- **Canonical URLs** - Prevent duplicate content
- **Open Graph** - Social media optimization

## 🎯 Tour Categories

### Uzbekistan Tours
- Best of Uzbekistan in 10 Days
- Golden Journey to Samarkand
- Seven Mysterious Nights
- Bike Tour in Uzbekistan

### Tours from Samarkand
- Samarkand City Tour
- Day Trip to Shahrisabz
- Urgut Bazaar & Konigil Village
- Hiking in Aman Kutan
- Nuratau Homestay Tours
- Yurt Camp Tour

### Tours from Bukhara
- Bukhara City Tour
- Nuratau Homestay Tours
- Yurt Camp & Samarkand

### Tours from Khiva
- Ancient Fortresses Tour

### Tajikistan Tours
- Seven Lakes Tour

## 📞 Contact Information

- **Address:** 4 Chirokchi str., Samarkand, Uzbekistan
- **Phone:** +998 91 555 0808
- **Email:** info@jahongir-travel.uz
- **Working Hours:** Mon-Fri 9:00 AM - 5:30 PM, Sat 9:00 AM - 1:00 PM

## 📄 License

This project is proprietary software for Jahongir Travel. All rights reserved.

## 🤝 Contributing

This is a private project for Jahongir Travel. For internal development:

1. Follow the established code structure
2. Test all changes locally before committing
3. Maintain SEO best practices
4. Keep backups before major changes

## 📝 Changelog

### Version 1.0.0 (December 6, 2024)
- Initial website launch
- SEO optimization implemented
- Clean URL structure planned
- Git repository initialized

---

**Developed for Jahongir Travel**  
*Professional travel services in Uzbekistan and Central Asia*
