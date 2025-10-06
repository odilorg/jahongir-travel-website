# 🔒 Security Checklist - Jahongir Travel Website

## ✅ **Sensitive Data Protection**

### **Files NEVER Committed to Git:**
- ✅ `mailer-tours.php` - Email sending functionality
- ✅ `mailer.php` - Email configuration  
- ✅ `phpmailer/` - Email library with credentials
- ✅ `*.log` files - May contain sensitive information
- ✅ `error_log` - Server error logs
- ✅ `backup_*.zip` - Backup files
- ✅ `*.env` files - Environment variables
- ✅ `*.sql` files - Database dumps
- ✅ Any files with passwords or API keys

### **Verification Commands:**
```bash
# Check what files are ignored
git check-ignore mailer-tours.php mailer.php phpmailer/

# Check what will be committed
git status

# Review files before committing
git diff --cached
```

## 🛡️ **Pre-Commit Security Checks**

### **Before Every Commit:**
1. ✅ Run `git status` to see what files will be committed
2. ✅ Run `git check-ignore <sensitive-file>` to verify protection
3. ✅ Review any new files for sensitive data
4. ✅ Never commit files with:
   - Passwords or credentials
   - API keys or tokens
   - Customer data or personal information
   - Database connection strings
   - Email SMTP settings

### **Red Flags - DO NOT COMMIT:**
- Files containing `password`, `secret`, `key`, `token`
- Files with email addresses and phone numbers
- Files with database connection details
- Files with API endpoints and credentials
- Files with customer booking information
- Files with payment processing details

## 🔐 **Production Security**

### **Server Configuration:**
- ✅ Keep sensitive files outside web root
- ✅ Use environment variables for credentials
- ✅ Enable HTTPS for production
- ✅ Regular security updates
- ✅ Backup encryption

### **Code Security:**
- ✅ Input validation on all forms
- ✅ SQL injection prevention
- ✅ XSS protection
- ✅ CSRF protection
- ✅ File upload restrictions

## 📋 **Commit Process**

### **Safe Commit Workflow:**
```bash
# 1. Check what will be committed
git status

# 2. Add only safe files
git add safe-file.php
git add assets/
git add images/

# 3. Review changes
git diff --cached

# 4. Commit with descriptive message
git commit -m "Add new feature without sensitive data"

# 5. Push to GitHub
git push origin main
```

### **If Sensitive Data is Accidentally Committed:**
```bash
# 1. Remove from history immediately
git filter-branch --force --index-filter \
'git rm --cached --ignore-unmatch sensitive-file.php' \
--prune-empty --tag-name-filter cat -- --all

# 2. Force push to GitHub
git push origin --force --all

# 3. Change any exposed credentials immediately
```

## 🚨 **Emergency Procedures**

### **If Credentials are Exposed:**
1. **Immediately change passwords/API keys**
2. **Remove sensitive data from Git history**
3. **Force push to GitHub to remove from remote**
4. **Review GitHub repository for exposed data**
5. **Notify team about security incident**

## 📞 **Contact Information**

- **Security Issues:** Contact system administrator immediately
- **Git Issues:** Review with development team
- **Production Issues:** Follow incident response procedures

---

**Remember: Security is everyone's responsibility!**

*Last Updated: December 6, 2024*
