#!/bin/sh

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM admissionsstudentitemstatus"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/admissionsstudentitemstatus.csv' INTO TABLE admissionsstudentitemstatus
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`ItemName\`,\`itemnamelong\`,\`ItemStatus\`,\`itemstatuslong\`,\`sortorder\`,\`Color\`,\`Archive\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM admissionsstatusforstudent"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/admissionsstatusforstudent.csv' INTO TABLE admissionsstatusforstudent
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`SocialSecurityNumber\`,\`ItemName\`,\`itemnamelong\`,\`ItemStatus\`,\`itemstatuslong\`,\`Comment\`,\`Color\`,\`Date\`,\`sortorder\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM admissionswebresponsefromstudent"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/admissionswebresponsefromstudent.csv' INTO TABLE admissionswebresponsefromstudent
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`ItemName\`,\`Questions\`,\`responsefromquestionpicked\`,\`extrainputboxneeded\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM cordat1"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/cordat1.csv' INTO TABLE cordat1
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`SOCSECNUM\`,\`StudentID\`,\`Password\`,\`Lastname\`,\`Firstname\`,\`Middlename\`,\`Address\`,\`PERCITY\`,\`PERSTATE\`,\`Zip\`,\`CURPHONE\`,\`CellPhone\`,\`SEX\`,\`Birthdate\`,\`emailaddress\`,\`DriversLicenseNumber\`,\`ACTCOMPOSI\`,\`ACTENG\`,\`ACTMATH\`,\`ACTSOCSCI\`,\`ACTNATSCI\`,\`ACTREADING\`,\`READCOMP\`,\`GED\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM cordat1p"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/cordat1p.csv' INTO TABLE cordat1p
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`SOCSECNUM\`,\`StudentID\`,\`Password\`,\`Lastname\`,\`Firstname\`,\`Middlename\`,\`Address\`,\`PERCITY\`,\`PERSTATE\`,\`Zip\`,\`CURPHONE\`,\`CellPhone\`,\`SEX\`,\`BIRTHDATE1\`,\`emailaddress\`,\`DriversLicenseNumber\`,\`ACTCOMPOSI\`,\`ACTENG\`,\`ACTMATH\`,\`ACTSOCSCI\`,\`ACTNATSCI\`,\`ACTREADING\`,\`READCOMP\`,\`GED\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM cordat4"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/cordat4.csv' INTO TABLE cordat4
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`SOCSECNUM\`,\`DISCIPLINE\`,\`COURSENO\`,\`HOURSCRED\`,\`SECTION\`,\`Description\`,\`Faculty1\`,\`GRADE\`,\`GradeNum\`,\`TERM\`,\`Year\`,\`DevelopmentCourse\`,\`Advisor\`,\`TRANSFER\`,\`COLLEGE\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM cordat4p"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/cordat4p.csv' INTO TABLE cordat4p
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`SOCSECNUM\`,\`DISCIPLINE\`,\`COURSENO\`,\`HOURSCRED\`,\`SECTION\`,\`Description\`,\`Faculty1\`,\`GRADE\`,\`GradeNum\`,\`TERM\`,\`Year\`,\`DevelopmentCourse\`,\`Advisor\`,\`TRANSFER\`,\`College\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM corstud5and8"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/corstud5and8.csv' INTO TABLE corstud5and8
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`socsecnum\`,\`PAPDAY\`,\`Description\`,\`Charges\`,\`Payments\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM studentcostreceived"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/studentcostreceived.csv' INTO TABLE studentcostreceived
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`socsecnum\`,\`Year\`,\`nameofcost\`,\`DollarAmount\`,\`Status\`,\`fallamount\`,\`FallDate\`,\`springamount\`,\`springdate\`,\`springstatus\`,\`summeramount\`,\`summerdate\`,\`summerstatus\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM studentfinancialaidstatus"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/studentfinancialaidstatus.csv' INTO TABLE studentfinancialaidstatus
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`socsecnum\`,\`Year\`,\`ItemName\`,\`ItemName Long\`,\`ItemStatus\`,\`ItemStatus Long\`,\`Comment\`,\`Color\`,\`date\`,\`Name of Scholarship\`,\`DollarAmount\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM studentscholarshipsreceived"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/studentscholarshipsreceived.csv' INTO TABLE studentscholarshipsreceived
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`socsecnum\`,\`Year\`,\`nameofscholarship\`,\`DollarAmount\`,\`fallamount\`,\`fallstatus\`,\`falldate\`,\`springamount\`,\`springdate\`,\`springstatus\`,\`summeramount\`,\`summerdate\`,\`summerstatus\`)
QUERY_INPUT

mysql -uinstall_hirenpatel4505 -pharvi2702 "install_sis" -e "DELETE FROM webresponse"
mysql -uinstall_hirenpatel4505 -pharvi2702  "install_sis" <<QUERY_INPUT
LOAD DATA LOCAL INFILE '/home/install/public_html/sis/import/webresponse.csv' INTO TABLE webresponse
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '
'
IGNORE 1 LINES
(\`ItemName\`,\`Questions\`,\`ResponseFromQuestionPicked\`,\`ExtraInputBoxNeeded\`,\`ShowLoanAmount\`)
QUERY_INPUT


