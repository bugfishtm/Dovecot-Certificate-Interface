# Dovecot Certificate Interface [DCI]

## Introduction

Welcome to the documentation for the Dovecot Certificate Interface [DCI]! This software facilitates the management of Dovecot per-domain SSL certificates and is designed to work seamlessly with ISPConfig. It provides a streamlined approach to configuring Dovecot for secure email communications across multiple domains.

**Key Features:**
- Manage and control Dovecot per-domain SSL certificates.
- Automate the ISPConfig Dovecot configuration file generation.
- Integrate with existing systems with minimal impact.

**Important:** If another system is already managing Dovecot configuration files (e.g., Plesk), using this software may lead to conflicts.

For additional resources, you can:

- [Download the latest release](https://github.com/bugfishtm/Dovecot-Certificate-Interface/archive/refs/heads/main.zip)
- [Visit the GitHub repository](https://github.com/bugfishtm/Dovecot-Certificate-Interface)

## General Information

The Dovecot Certificate Interface allows for:
- SSL certificates for each domain used with Dovecot.
- Automation of certificate configuration with ISPConfig.
- Deep validation of certificates to ensure their integrity.

**Note:** This software has been tested primarily on Debian and Ubuntu systems. Compatibility with other systems should be verified individually.

## Tutorial Videos

Introduction Video  
<video width="320" height="240" controls>
    <source src="./introduction.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
[Download Video](./introduction.mp4) | [Download Handout](./presentation.pptx)

Information Video  
<video width="320" height="240" controls>
    <source src="./information.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
[Download Video](./information.mp4)

## Screenshots

<div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
    <a href="main.png" target="_blank">
        <img src="main.png" alt="Screenshot of Domain Panel" style="width: 100%; max-width: 300px; height: auto; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
    </a>
    <a href="2.png" target="_blank">
        <img src="2.png" alt="Screenshot of Blacklisting Feature" style="width: 100%; max-width: 300px; height: auto; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
    </a>
    <a href="1.png" target="_blank">
        <img src="1.png" alt="Screenshot of User Management Panel" style="width: 100%; max-width: 300px; height: auto; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
    </a>
</div>


## Project Acknowledgment

The Dovecot Certificate Interface project was developed using the [Bugfish Framework](./bugfish-framework-banner.jpg).

## Requirements

- **Mailserver:** Dovecot
- **No Other SSL Management Software:** Ensure no other software is managing per-domain SSL certificates.
- **Webserver:** PHP 7/8 capable
- **Database:** MySQL

## Compatibility

The software has been tested on various systems:

- **Debian:** 8/9/10/11
- **Ubuntu:** 16/18/20/22
- **Dovecot Versions:** Various (Standalone)
- **ISPConfig Versions:** Various (Auto-Fetch Domains and SSL Certificates)

## System Files Changes

The DCI software is non-destructive:

- It modifies only the file specified in `settings.php` with the constant `_CRON_DOVECOT_FILE_`.
- Additions to the `dovecot.conf` file are reversible.
- Conflicts with other configuration management tools (e.g., Plesk) should be avoided.

## User Management

Manage users with the following capabilities:

- Create, edit, and delete users.
- Assign different permissions for various areas.
- If the admin password is lost and no other users have access, you must either delete the user database from MySQL or change the admin password directly in the database.

## Logging

Monitor the background operations of cronjobs in the "Logs" section of the web interface:

- View logs for `sync.php` and `ispconfig-fetch.php`.
- Latest entries are the most relevant, with older entries available in the archive.

## Debugging

Enable MySQL logging for debugging purposes by setting `_MYSQL_LOGGING_` to "true" in `settings.php`. This will display MySQL errors in a new section of the web interface. This feature is intended for debugging and not for use in production environments.

## SSL Validation

Domains added to the software will be validated before being written to the Dovecot configuration file:

- **Validation Checks:** The software checks certificate modulus to ensure consistency between certificate and key.
- **Error Handling:** Domains with invalid certificates or keys will not be added.

## Use with ISPConfig

- **Automation:** The software can automatically create Dovecot configuration files for SSL mail domains by fetching certificates from ISPConfig.
- **Custom Certificates:** If custom ISPConfig certificates are available, they will be used.
- **Standalone Mode:** If using ISPConfig, avoid activating the `ispconfig-fetch` cronjob if you want to manage domains manually.

## IP Blacklisting

The software includes an IP blacklisting feature:

- **Failed Logins:** IP addresses are blocked after a specified number of failed login attempts.
- **Blocking Duration:** IPs remain blocked until the `daily.php` cronjob is executed or manually removed.

For further assistance or detailed documentation, please refer to the [GitHub repository](https://github.com/bugfishtm/Dovecot-Certificate-Interface).