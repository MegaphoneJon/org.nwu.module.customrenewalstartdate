# org.nwu.module.customrenewalstartdate

This extension changes the "Default Renewal Date" when renewing a membership on the CiviCRM back end.

If the membership is expired, the start date of the renewal will begin immediately after the end date of the old membership.

This was originally created to support the behavior above if the membership status is "Grace", but it was hardcoded for a client.  It wouldn't be much work for this to work on anyone's Grace status, but that's disabled for now.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.3+
* Tested with CiviCRM 4.6 to 5.6.1. This is a very stable extension.

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl org.nwu.module.customrenewalstartdatec@https://github.com/MegaphoneJon/org.nwu.module.customrenewalstartdate/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/MegaphoneJon/org.nwu.module.customrenewalstartdate
cv en customrenewalstartdate
```
