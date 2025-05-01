<?php require PATH . '/view/common/header.php';?>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-theme table-row v-middle">
                    <thead class="text-muted">
                        <tr>
                            <th width="80"></th>
                            <th><?php echo __('Cron Zamanı');?></th>
                            <th><?php echo __('Cron URL');?></th>
                            <th><?php echo __('Hedef');?></th>
                            <th>HRT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="v-middle text-color">
                            <td class="pr-0 text-muted text-12">
								#1
                            </td>
                            <td class="flex">
								0 0 * * 0 *
                            </td>
                            <td class="no-wrap">
								<?php echo APP; ?>/app/controller/tasks/weekly.php
                            </td>
                            <td class="no-wrap">
								İçerikteki haftalık görüntülemeleri sıfırlar.
                            </td>
                            <td class="no-wrap">
								Haftanın Pazarında
                            </td>
                        </tr>
                        <tr class="v-middle text-color">
                            <td class="pr-0 text-muted text-12">
								#2
                            </td>
                            <td class="flex">
								0 0 L * * *
                            </td>
                            <td class="no-wrap">
								<?php echo APP; ?>/app/controller/tasks/monthly.php
                            </td>
                            <td class="no-wrap">
								İçerikteki aylık görüntülemeleri sıfırlar.
                            </td>
                            <td class="no-wrap">
								Ayın 31'inde
                            </td>
                        </tr>
                        <tr class="v-middle text-color">
                            <td class="pr-0 text-muted text-12">
								#3
                            </td>
                            <td class="flex">
								0 0 * * *
                            </td>
                            <td class="no-wrap">
								<?php echo APP; ?>/app/controller/tasks/demote.php
                            </td>
                            <td class="no-wrap">
								Premium süresi biten üyeleri ayırır.
                            </td>
                            <td class="no-wrap">
								Her Gün Gece Yarısı
                            </td>
                        </tr>
                        <tr class="v-middle text-color">
                            <td class="pr-0 text-muted text-12">
								#4
                            </td>
                            <td class="flex">
								0 0 * * *
                            </td>
                            <td class="no-wrap">
								<?php echo APP; ?>/api/tmdb/auto/?page=0
                            </td>
                            <td class="no-wrap">
								Animeler için gelecek bölümleri oluşturur.
                            </td>
                            <td class="no-wrap">
								Her Gün Gece Yarısı
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><br>
                                Yeni bölümler cronjob'u her 100 anime için bir cronjob çalıştırır. Eğer 101 animeniz varsa, iki cronjob'a ihtiyacınız olur: <pre style="display:inline;color:#fff;">?page=0</pre> VE <pre style="display:inline;color:#fff;">?page=1</pre>. Ve her 100 anime için sayfa numarasını bir artırarak devam etmelisiniz. Bu, sunucunun binlerce animeden gelen toplu isteklerle aşırı yüklenmesini önlemek içindir.
                        </div>
<?php require PATH . '/view/common/footer.php';?>