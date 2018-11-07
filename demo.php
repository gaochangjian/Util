<?php
require_once './vendor/autoload.php';
//use Util\excel\Excel;

 // $excel=new Excel();
 //        $table_name="mk_material_list_edit";
 //        $field=["id"=>"序号","guid"=>"项目代码","name"=>"项目名称"];
 //        $list = [0=>["id"=>"序号","guid"=>"项目代码","name"=>"项目名称"]];
 //        $excel
 //        ->setExcelName("下载装修项目")
 //        //->setColumnWidth(50)
 //        ->createSheet("装修项目",$field,$list)
 //        ->downloadExcel();
  
 // $getExcelObject=Excel::loadExcel("20180731111036.xls");
 //        $sheetName=$getExcelObject->getSheetNames();
 //        var_dump($sheetName);die;
 //        $sheet = $getExcelObject->getSheetByName($sheetName[0])->toArray();
 //       var_dump($sheet);
use Util\logger\Logger;
define('LOG_PATH','log/'); 
Logger::init(LOG_PATH);
Logger::access('同步联动银行', 'service/umf_bank');
echo "1";die;