<?php

return array(

    'accepted'                  => 'คุณยอมรับสินทรัพย์นี้เรียบร้อยแล้ว',
    'declined'                  => 'คุณปฏิเสธสินทรัพย์นี้เรียบร้อยแล้ว',
    'bulk_manager_warn'	        => 'Your users have been successfully updated, however your manager entry was not saved because the manager you selected was also in the user list to be edited, and users may not be their own manager. Please select your users again, excluding the manager.',
    'user_exists'               => 'มีผู้ใช้งานนี้แล้ว',
    'user_not_found'            => 'ไม่มีชื่อผู้ใช้งานนี้',
    'user_login_required'       => 'ต้องการชื่อผู้ใช้งาน',
    'user_password_required'    => 'ต้องการรหัสผ่าน',
    'insufficient_permissions'  => 'สิทธิ์การใช้งานไม่เพียงพอ',
    'user_deleted_warning'      => 'ผู้ใช้งานนี้ถูกลบแล้ว คุณจำเป็นต้องกู้คืนผู้ใช้งานก่อนแก้ไข',
    'ldap_not_configured'        => 'การทำงานร่วมกับ LDAP ไม่ได้ถูกตั้งค่าไว้สำหรับการติดตั้งนี้',


    'success' => array(
        'create'    => 'สร้างผู้ใช้งานเสร็จสมบูรณ์แล้ว',
        'update'    => 'แก้ไขผู้ใช้งานเสร็จสมบูรณ์แล้ว',
        'update_bulk'    => 'Users were successfully updated!',
        'delete'    => 'ลบผู้ใช้งานเสร็จสมบูรณ์แล้ว',
        'ban'       => 'แบนผู้ใช้งานเสร็จสมบูรณ์แล้ว',
        'unban'     => 'ยกเลิกการแบนผู้ใช้งานเสร็จสมบูรณ์แล้ว',
        'suspend'   => 'ระงับผู้ใช้งานเสร็จสมบูรณ์แล้ว',
        'unsuspend' => 'ยกเลิกระงับผู้ใช้งานเสร็จสมบูรณ์แล้ว',
        'restored'  => 'กู้คืนผู้ใช้งานเสร็จสมบูรณ์แล้ว',
        'import'    => 'นำเข้าผู้ใช้งานเสร็จสมบูรณ์แล้ว',
    ),

    'error' => array(
        'create' => 'มีปัญหาระหว่างการสร้างผู้ใช้งาน กรุณาลองใหม่อีกครั้ง',
        'update' => 'มีปัญหาระหว่างปรับปรุงข้อมูลผู้ใช้ กรุณาลองใหม่อีกครั้ง',
        'delete' => 'มีปัญหาระหว่างลบผู้ใช้งาน กรุณาลองใหม่อีกครั้ง',
        'delete_has_assets' => 'This user has items assigned and could not be deleted.',
        'unsuspend' => 'มีปัญหาระหว่างการยกเลิกการระงับผู้ใช้งาน กรุณาลองใหม่อีกครั้ง',
        'import'    => 'มีปัญหาระหว่างการนำเข้าผู้ใช้งาน กรุณาลองใหม่อีกครั้ง',
        'asset_already_accepted' => 'ทรัพย์สินนี้ได้รับการยอมรับแล้ว',
        'accept_or_decline' => 'คุณต้องยอมรับ หรือปฏิเสธสินทรัพย์นี้',
        'incorrect_user_accepted' => 'The asset you have attempted to accept was not checked out to you.',
        'ldap_could_not_connect' => 'ไม่สามารถเชื่อมต่อกับ LDAP Server ได้ กรุณาตรวจสอบการตั้งค่า LDAP Server ของคุณในไฟล์ตั้งค่า LDAP <br>ผิดพลาดจาก LDAP Server:',
        'ldap_could_not_bind' => 'ไม่สามารถผูกกับ LDAP Server ได้ กรุณาตรวจสอบการตั้งค่า LDAP Server ของคุณในไฟล์ตั้งค่า LDAP <br>ผิดพลาดจาก LDAP Server: ',
        'ldap_could_not_search' => 'ไม่สามารถค้นหา LDAP Server ได้ กรุณาตรวจสอบการตั้งค่า LDAP Server ของคุณในไฟล์ตั้งค่า LDAP <br>ผิดพลาดจาก LDAP Server:',
        'ldap_could_not_get_entries' => 'ไม่สามารถดึงข้อมูลจาก LDAP Server ได้ กรุณาตรวจสอบการตั้งค่า LDAP Server ของคุณในไฟล์ตั้งค่า LDAP <br>ผิดพลาดจาก LDAP Server:',
        'password_ldap' => 'The password for this account is managed by LDAP/Active Directory. Please contact your IT department to change your password. ',
    ),

    'deletefile' => array(
        'error'   => 'ไฟล์ยังไม่ถูกลบ กรุณาลองใหม่อีกครั้ง',
        'success' => 'ไฟล์ถูกลบเรียบร้อยแล้ว',
    ),

    'upload' => array(
        'error'   => 'ไฟล์ยังไม่ถูกอัพโหลด กรุณาลองอีกครั้ง',
        'success' => 'ไฟล์ถูกอัพโหลดเรียบร้อยแล้ว',
        'nofiles' => 'คุณยังไม่ได้เลือกไฟล์สำหรับอัพโหลด',
        'invalidfiles' => 'ไฟล์ข้อมูลของคุณมีขนาดใหญ่เกินไป หรือประเภทของไฟล์ไม่ได้รับการอนุญาต ประเภทของไฟล์ที่ได้รับอนุญาตแล้วมีดังนี้ png, gif, jpg, doc, docx, pdf, and txt.',
    ),

);
