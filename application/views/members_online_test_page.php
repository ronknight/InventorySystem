<div class="row">
    <div class="col-md-6">
        <!-- BEGIN SITE VISITS PORTLET-->
        <div class="portlet light bordered">

            <div class="portlet-body">

                <?php
                $sql = $this->db->query("SELECT
prm_institute.INS_ID,
Count(prm_institute.INS_ID) total,
prm_institute.INS_NAME,
hrm_emp_institute_log.`STATUS`
FROM
hrm_emp_institute_log ,
hrm_employees ,
prm_institute
WHERE
prm_institute.INS_ID = hrm_employees.SCHOOL_ID AND
hrm_employees.EMP_NO = hrm_emp_institute_log.EMP_NO AND
hrm_emp_institute_log.`STATUS`=1
GROUP BY prm_institute.INS_NAME, hrm_emp_institute_log.`STATUS`");
                $result1 = $sql->result();
                ?>

                <?php $rows = 1; ?>
                <script>

                    $(function () {
                        Highcharts.setOptions({
                            colors: ['#DC143C', '#55141C', '#F6C9CC', '#8B5F65', '#822b01', '#B03060', '#00E5EE', '#4A777A',
                                '#543948', '#FFCC00', '#871F78 ', '#7F00FF', '#668B8B', '#5F9F9F', '#803826', '#99CC00',
                                '#00CDCD', '#A3A385', '#05EDFF', '#CE9DB6', '#344152', '#B7A3A3', '#302B54', '#C266E0',
                                '#802A2A', '#EEB4B4', '#8A3324', '#FF3300', '#FFA07A', '#5C4033', '#996633', '#C2A385']
                        });
                        // Create the chart
                        $('#institute_piechart').highcharts({
                            chart: {
                                type: 'pie'
                            },
                            title: {
                                text: 'TOTAL NO OF SCHOOLS ( LEVEL WISE )'
                            },
                            subtitle: {
                                text: 'Elementary & Secondary Education Department'
                            },
                            plotOptions: {
                                series: {
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.name}: {point.y}'

                                    }
                                }
                            },

                            tooltip: {
                                headerFormat: '<span style="font-size:16px">{series.name}</span><br>',
                                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} No.<br/>'
                            },
                            series: [{
                                name: 'TOTAL SCHOOLS',
                                colorByPoint: true,
                                data: [<?php foreach($result as $data) : ?>
                                    {
                                        name: '<?= strtoupper($data->SchoolLevel)?>',
                                        y: <?php echo $data->totins  ?>,
                                        drilldown: '<?=strtoupper($data->SchoolLevel)?>'

                                    }, <?php endforeach;?>]

                            }],

                            drilldown: {
                                series: [

                                    <?php
                                    $sqlforlevels2 = $this->db->query("SELECT 
  COUNT(i.`INS_ID`) AS totins,
d.DIS_ID,
 d.`DIS_NAME`
FROM
  `prm_institute` AS i,
  `prm_district` AS d
WHERE i.`DIS_ID` = d.`DIS_ID` 
AND i.`SchoolStatusId` != 3
AND i.SchoolLevelId = '$data->SchoolLevelId'
GROUP BY d.`DIS_NAME` ASC ");
                                    $resultforlevels2 = $sqlforlevels2->result();
                                    foreach($result as $rowlevel2):
                                    ?>

                                    {
                                        id: '<?=strtoupper($rowlevel2->SchoolLevel);?>',
                                        name: '<?=strtoupper($rowlevel2->SchoolLevel);?>',
                                        cursor: 'pointer',
                                        point: {
                                            events: {
                                                click: function () {
                                                    location.href = this.options.url;
                                                }
                                            }
                                        },
                                        data: [

                                            <?php

                                            $sqlfordis = $this->db->query("SELECT 
  COUNT(i.`INS_ID`) AS totins,
d.DIS_ID,
 d.`DIS_NAME`
FROM
  `prm_institute` AS i,
  `prm_district` AS d
WHERE i.`DIS_ID` = d.`DIS_ID` 
AND i.`SchoolStatusId` != 3
AND i.SchoolLevelId = '$rowlevel2->SchoolLevelId'
GROUP BY d.`DIS_NAME` ASC");
                                            $resultfordis = $sqlfordis->result();
                                            foreach($resultfordis as $rowdis):
                                            ?>


                                            {
                                                name: '<?=$rowdis->DIS_NAME;?>',
                                                y: <?=$rowdis->totins;?>,
                                                url: '<?= base_url();?>institutes/institute_list_graph/<?php echo $rowdis->DIS_ID; ?>/<?php echo $rowlevel2->SchoolLevelId?>'
                                            },


                                            <?php
                                            endforeach;
                                            ?>

                                        ]
                                    },

                                    <?php
                                    endforeach;
                                    ?>

                                ]

                            }
                        });
                    });


                </script>
                <div id="institute_piechart" style="height: 380px; margin: 0 auto"></div>
            </div>
        </div>
        <!-- END SITE VISITS PORTLET-->
    </div>

    <div class="col-md-6">
        <div class="portlet light bordered">

            <div class="portlet-body">

                <script>

                    $(function () {
                        Highcharts.setOptions({
                            colors: ['#350082', '#810380', '#b20105', '#026473', '#067401', '#822b01', '#ae0344', '#0f09d5',
                                '#5E2D79', '#FFCC00', '#997A00', '#CCCC00', '#FF3300', '#FF704D', '#803826', '#99CC00',
                                '#9B30FF', '#A3A385', '#993366', '#CE9DB6', '#993333', '#B7A3A3', '#335C33', '#C266E0',
                                '#B2B247', '#8E8E39', '#CCFF99', '#7A995C', '#4DB8FF', '#339933', '#996633', '#C2A385']
                        });
                        // Create the chart
                        $('#district_ins').highcharts({
                            chart: {
                                type: 'pie'
                            },
                            title: {
                                text: 'TOTAL NO OF SCHOOLS ( DIVISION WISE )'
                            },
                            subtitle: {
                                text: 'Elementary & Secondary Education Department'
                            },
                            plotOptions: {
                                series: {
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.name}: {point.y}'

                                    }
                                }
                            },

                            tooltip: {
                                headerFormat: '<span style="font-size:16px">{series.name}</span><br>',
                                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} No.<br/>'
                            },
                            series: [{
                                name: 'TOTAL SCHOOLS',
                                colorByPoint: true,
                                data: [<?php foreach($ins_count_dis as $data) : ?>
                                    {
                                        name: '<?=$data->DIV_NAME?>',
                                        y: <?php echo $data->total?>,
                                        drilldown: '<?=$data->DIV_NAME;?>'

                                    }, <?php endforeach;?>]

                            }],

                            drilldown: {
                                series: [

                                    <?php
                                    $sqlfordistricts2 = $this->db->query("SELECT d.`DIV_ID`,d.`DIV_NAME`
,IFNULL((SELECT SUM(ds.`tot`)
FROM districtwise_schools AS ds
WHERE  d.`DIV_ID`=ds.div_id),0) AS total

FROM `districtwise_schools` AS d
-- WHERE d.`DIV_ID`='1'
 GROUP BY d.`DIV_ID`,d.`DIV_NAME`");
                                    $resultfordistricts2 = $sqlfordistricts2->result();
                                    foreach($ins_count_dis as $rowdis2):
                                    ?>

                                    {
                                        id: '<?=$rowdis2->DIV_NAME;?>',
                                        name: '<?=$rowdis2->DIV_NAME;?>',
                                        cursor: 'pointer',
                                        point: {
                                            events: {
                                                click: function () {
                                                    location.href = this.options.url;
                                                }
                                            }
                                        },
                                        data: [

                                            <?php
                                            $sqlfordisnew = $this->db->query("SELECT d.`DIV_ID`,d.`DIV_NAME`,d.`DIS_ID`,d.`DIS_NAME`
,IFNULL((SELECT SUM(ds.`tot`)
FROM districtwise_schools AS ds
WHERE  d.`DIS_ID`=ds.dis_id
AND d.`DIV_ID`=ds.div_id),0) AS total
FROM `districtwise_schools` AS d
WHERE d.`DIV_ID`='$rowdis2->DIV_ID'
GROUP BY d.`DIV_ID`,d.`DIV_NAME`,d.`DIS_ID`,d.`DIS_NAME`");
                                            $resultfordisnew = $sqlfordisnew->result();
                                            foreach($resultfordisnew as $rowdisnew):
                                            ?>


                                            {
                                                name: '<?=$rowdisnew->DIS_NAME;?>',
                                                y: <?=$rowdisnew->total;?>,
                                                url: '<?= base_url();?>institutes/getdivisionwiseschools/<?php echo $rowdisnew->DIS_ID; ?>/<?= $rowdisnew->DIV_ID?>'
                                            },


                                            <?php
                                            endforeach;
                                            ?>

                                        ]
                                    },

                                    <?php
                                    endforeach;
                                    ?>

                                ]

                            }
                        });
                    });

                </script>

                <div id="district_ins"
                     style="height: 380px; margin: 0 auto;">

                </div>

            </div>
        </div>


    </div>


</div>

<!-- ======================Second row starts ============= --->

<div class="row">
    <div class="col-md-12">
        <!-- School Level Wise HR Count -->
        <div class="portlet light bordered">

            <div class="portlet-body">
                <h3 align="center"> <? //= $type; ?></h3>
                <?php $sqlforemp = $this->db->query("SELECT d.`SchoolLevelId`,d.`SchoolLevel`
,IFNULL((SELECT SUM(ds.`tot`)
FROM districtwise_emp AS ds
WHERE  d.`SchoolLevelId`=ds.SchoolLevelId),0) AS total

FROM `districtwise_emp` AS d
-- WHERE d.`SchoolLevelId`=1

GROUP BY d.`SchoolLevelId`,d.`SchoolLevel`")->result(); ?>
                <script>

                    $(function () {
                        Highcharts.setOptions({
                            colors: ['#DC143C', '#4B0082', '#008B45', '#C266E0', '#458B74', '#0AC92B', '#00E5EE', '#4A777A',
                                '#60AFFE', '#FFCC00', '#997A00', '#CCCC00', '#FF3300', '#FF704D', '#803826', '#99CC00',
                                '#666633', '#A3A385', '#993366', '#CE9DB6', '#993333', '#B7A3A3', '#335C33', '#C266E0',
                                '#B2B247', '#8E8E39', '#CCFF99', '#7A995C', '#4DB8FF', '#339933', '#996633', '#C2A385']
                        });

                        $('#region_inst').highcharts({
                            chart: {
                                type: 'pie'
                            },
                            title: {
                                text: 'TOTAL NO OF EMPLOYEES ( LEVEL WISE )'
                            },
                            subtitle: {
                                text: 'Elementary & Secondary Education Department'
                            },
                            plotOptions: {
                                series: {
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.name}: {point.y}'

                                    }
                                }
                            },

                            tooltip: {
                                headerFormat: '<span style="font-size:16px">{series.name}</span><br>',
                                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}<br/>'
                            },
                            series: [{
                                name: 'Total Employees',
                                colorByPoint: true,
                                data: [<?php foreach($sqlforemp as $rowsemp) : ?>
                                    {
                                        name: '<?=$rowsemp->SchoolLevel?>',
                                        y: <?php echo $rowsemp->total?>,
                                        drilldown: '<?=$rowsemp->SchoolLevel;?>'

                                    }, <?php endforeach;?>]

                            }],

                            drilldown: {
                                series: [

                                    <?php
                                    foreach($sqlforemp as $rowsforemp):
                                    ?>

                                    {
                                        id: '<?=$rowsforemp->SchoolLevel;?>',
                                        name: '<?=$rowsforemp->SchoolLevel;?>',
                                        cursor: 'pointer',
                                        point: {
                                            events: {
                                                click: function () {
                                                    location.href = this.options.url;
                                                }
                                            }
                                        },
                                        data: [

                                            <?php
                                            $sqlfordisemps = $this->db->query("SELECT d.`DIS_ID`,d.`DIS_NAME`,d.`SchoolLevelId`,d.`SchoolLevel`
,IFNULL((SELECT SUM(ds.`tot`)
FROM districtwise_emp AS ds
WHERE d.`DIS_ID`=ds.dis_id  AND d.`SchoolLevelId`=ds.SchoolLevelId),0) AS total

FROM `districtwise_emp` AS d
WHERE d.`SchoolLevelId`= '$rowsforemp->SchoolLevelId'
GROUP BY d.`DIS_ID`,d.`DIS_NAME`,d.`SchoolLevelId`,d.`SchoolLevel`");
                                            $resultfordisemps = $sqlfordisemps->result();
                                            foreach($resultfordisemps as $rowdisemps):
                                            ?>


                                            {
                                                name: '<?=$rowdisemps->DIS_NAME;?>',
                                                y: <?=$rowdisemps->total;?>,
                                                url: '<?= base_url();?>dashboard/getDistrict_employees/<?php echo $rowsforemp->SchoolLevelId; ?>/<?php echo $rowdisemps->DIS_ID?>'
                                            },


                                            <?php
                                            endforeach;
                                            ?>

                                        ]
                                    },

                                    <?php
                                    endforeach;
                                    ?>

                                ]

                            }
                        });
                    });

                </script>

                <div id="region_inst"
                     style="height: 500px; margin: 0 auto"></div>

            </div>
        </div>
        <!-- School Level Wise HR Count ends -->

    </div>
</div>

<!--Third Row studnets -->
<div class="row">
    <div class="col-md-12">


        <!-- School Level Wise Enrolled Students -->
        <div class="portlet light bordered">
            <!--<div class="widget-title">

                <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>

            </div>-->
            <div class="portlet-body">
                <h3 align="center"></h3>
                <?php $level_std_sql = $this->db->query("SELECT s.`SchoolLevelId`,s.`SchoolLevel`,SUM(s.`TotalStudents`) AS tot FROM `distwise_students` AS s
GROUP BY s.`SchoolLevelId`,s.`SchoolLevel`
ORDER BY s.`SchoolLevelId` ASC")->result();

                ?>

                <script>

                    $(function () {
                        Highcharts.setOptions({
                            colors: ['#4DB8FF', '#8B1A1A', '#000000', '#EE7600', '#458B74', '#0AC92B', '#00E5EE', '#4A777A',
                                '#60AFFE', '#FFCC00', '#997A00', '#CCCC00', '#FF3300', '#FF704D', '#803826', '#99CC00',
                                '#666633', '#A3A385', '#993366', '#CE9DB6', '#993333', '#B7A3A3', '#335C33', '#C266E0',
                                '#B2B247', '#8E8E39', '#CCFF99', '#7A995C', '#4DB8FF', '#339933', '#996633', '#C2A385']
                        });

                        $('#level_student').highcharts({
                            chart: {
                                type: 'pie'
                            },
                            title: {
                                text: 'TOTAL NO OF STUDENTS ( LEVEL WISE )'
                            },
                            subtitle: {
                                text: 'Elementary & Secondary Education Department'
                            },
                            plotOptions: {
                                series: {
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.name}: {point.y}'

                                    }
                                }
                            },

                            tooltip: {
                                headerFormat: '<span style="font-size:16px">{series.name}</span><br>',
                                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}<br/>'
                            },
                            series: [{
                                name: 'Total Students',
                                colorByPoint: true,
                                data: [<?php foreach($level_std_sql as $row_stds) : ?>
                                    {
                                        name: '<?=strtoupper($row_stds->SchoolLevel);?>',
                                        y: <?php echo $row_stds->tot?>,
                                        drilldown: '<?=strtoupper($row_stds->SchoolLevel);?>'

                                    }, <?php endforeach;?>]

                            }],

                            drilldown: {
                                series: [

                                    <?php
                                    foreach($level_std_sql as $rowsforlevels):
                                    ?>

                                    {
                                        id: '<?=strtoupper($rowsforlevels->SchoolLevel);?>',
                                        name: '<?=strtoupper($rowsforlevels->SchoolLevel);?>',
                                        cursor: 'pointer',
                                        point: {
                                            events: {
                                                click: function () {
                                                    location.href = this.options.url;
                                                }
                                            }
                                        },
                                        data: [

                                            <?php
                                            $sqlfordisstds = $this->db->query("SELECT s.`SchoolLevelId`,s.`SchoolLevel`,s.`dis_id`,s.`dis_name`, SUM(s.`TotalStudents`) AS tot FROM `distwise_students` AS s
WHERE s.`SchoolLevelId`='$rowsforlevels->SchoolLevelId'
GROUP BY s.`SchoolLevelId`,s.`SchoolLevel`,s.`dis_id`,s.`dis_name`
ORDER BY s.`SchoolLevelId` DESC");
                                            $resultfordisstds = $sqlfordisstds->result();
                                            foreach($resultfordisstds as $rowdis_stds):
                                            ?>


                                            {
                                                name: '<?=$rowdis_stds->dis_name;?>',
                                                y: <?=$rowdis_stds->tot;?>,
                                                url: '<?= base_url();?>dashboard/get_students/<?php echo $rowsforlevels->SchoolLevelId; ?>/<?php echo $rowdis_stds->dis_id?>'
                                            },


                                            <?php
                                            endforeach;
                                            ?>

                                        ]
                                    },

                                    <?php
                                    endforeach;
                                    ?>

                                ]

                            }
                        });
                    });

                </script>

                <div id="level_student"
                     style="height: 500px;margin: 0 auto"></div>

            </div>
        </div>
        <!-- School Level Wise Enrolled Students -->

    </div>

</div>


