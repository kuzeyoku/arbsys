
<?php $__env->startSection('content'); ?>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <?php echo $__env->make('layout.breadcrumb', [
            'url' => [
                route('lawsuit.index') => 'Dosyalar',
                null => 'Arabuluculuk Sürecine İlişkin Bilgilendirme Tutanağı',
            ],
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

                <?php echo $__env->make('mediator.document.nav', [
                    'nav' => [
                        1 => 'Taraf Seçimi',
                        2 => 'Toplantı Bilgileri',
                        3 => 'Önizleme',
                        4 => 'Bitir',
                    ],
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid">
                            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                                <?php echo e(Form::open(['url' => route('arbiter_process_info_protocol.store', $lawsuit), 'method' => 'POST', 'class' => 'kt-form', 'id' => 'kt_form'])); ?>

                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                    data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">Hangi taraf(lar) toplantıya katıldı?</div>
                                    <?php echo $__env->make('mediator.document.layout.side_select', $lawsuit, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                    <div class="kt-heading kt-heading--md">Toplantı Bilgileri</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="form-group">
                                                <label for="meeting_date">Toplantı Tarihi</label>
                                                <input type="text" id="meeting_date" name="meeting_date"
                                                    class="form-control datepicker datedotmask"
                                                    value="<?php echo e($lawsuit->meeting_date); ?>" autocomplete="off" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="meeting_hour">Toplantı Saati</label>
                                                <input type="text" id="meeting_hour" name="meeting_start_hour"
                                                    class="form-control timepicker"
                                                    value="<?php echo e($lawsuit->meeting_start_hour); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <?php echo e(Form::label('Toplantı Yeri')); ?>

                                                <?php echo e(Form::select('mediation_center', \App\Models\MediationCenter::selectToArray(), $lawsuit->mediation_center ?? auth()->user()->mediator->meeting_address_proposal ? auth()->user()->mediator->mediation_center_id : null, ['class' => 'form-control selectSearch', 'placeholder' => '--Seçiniz--'])); ?>

                                            </div>
                                            <div class="form-group">
                                                <?php echo e(Form::label('Adresi Elle Gir')); ?>

                                                <?php echo e(Form::checkbox('meeting_address_check', true, false, ['id' => 'meeting_address_check'])); ?>

                                            </div>
                                            <div class="form-group" style="display:none" id="meeting_address">
                                                <label>Toplantı Adresi</label>
                                                <input type="text" class="form-control" name="meeting_address"
                                                    placeholder="Toplantı Adresi Yazınız" autocomplete="off"
                                                    id="meeting_address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                    <div class="kt-heading kt-heading--md">Önizleme</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v4__form">
                                            <p class="red-text"><strong>Not:</strong> @ İşareti ile başlayan
                                                değişkenler
                                                kaydet butonuna tıkladığınızda taraf ve alıcı bilgileri ile
                                                değiştirilecektir.</p>
                                            <textarea class="preview_area" name="preview" id="preview_area"
                                                data-url="<?php echo e(route('arbiter_process_info_protocol.preview', $lawsuit)); ?>">
                                                </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                    <div class="kt-heading kt-heading--md">Bitir</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v4__review">
                                            <p class="kt-font-bold" id="before_saved">
                                                Çıktı almak ve daha sonradan evraklarım sekmesinden evraklarınızı
                                                görüntülemek için kaydet butonu ile kaydedebilirsiniz.
                                            </p>
                                            <div class="kt-wizard-v4__review-item" id="saved" style="display: none;">
                                                <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
                                                    rel="stylesheet">
                                                <div class="neo-notification row">
                                                    <i class="material-icons col-1 align-middle my-auto">notifications</i>
                                                    <div class="col-11">
                                                        Evrak başarıyla kaydedilmiştir. Evraklarım sekmesinden
                                                        dilediginiz zaman erişebilirsiniz.
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="kt-wizard-v4__review-content">
                                                    <h1 class="kt-heading kt-heading--lg">Sürece Devam Etmek istiyor
                                                        musunuz?</h1>
                                                    <a class="btn btn-success btn-lg" href="#next_level"
                                                        data-toggle="modal">Evet</a>
                                                    <a class="btn btn-danger btn-lg"
                                                        href="<?php echo e(route('lawsuit.index')); ?>">Çık</a>
                                                    <a href="javascript:;" class="btn btn-success float-right"
                                                        id="cikti_btn">
                                                        <i class="fas fa-print"></i> Çıktı Al
                                                    </a>
                                                    <div class="print_side" id=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php echo $__env->make('layout.form_actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php echo e(Form::close()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="next_level">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>KVKK Belgesi Oluşturmak İstiyormusunuz ?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo e(route('kvkk.create', $lawsuit->id)); ?>" class="btn btn-success btn-lg">Evet</a>
                        <a href="<?php echo e(route('lawsuit.index')); ?>" class="btn btn-primary btn-lg">Hayır</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('js/addSubSide.js')); ?>?v=<?php echo e(time()); ?>"></script>
    <script src="<?php echo e(asset('js/page/arbiter_process_info_protocol/wizard.js')); ?>?v=<?php echo e(time()); ?>"></script>
    <script src="<?php echo e(asset('js/printThis.js')); ?>?v=<?php echo e(time()); ?>"></script>
    <script src="<?php echo e(asset('js/side_management_functions.js')); ?>?v=<?php echo e(time()); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arbsys\resources\views/mediator/document/arbiter_process_info_protocol/create.blade.php ENDPATH**/ ?>