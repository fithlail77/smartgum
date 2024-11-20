<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Assessment Blok</a>
                    </li>
                </ul>
            </div>
            <?= $this->session->userdata('pesan'); ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Assessment Blok</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div style="--aspect-ratio: 16/9;">
                            <iframe title="Assessment Blok Dashboard" width="1260" height="1024" src="https://app.powerbi.com/view?r=eyJrIjoiYWNiZDBkMTItNzUzYS00ZTEyLWFiZWMtYjIwNWQ2MTUxZGI2IiwidCI6IjkzMzQ3NTJlLWIwM2EtNDUzNy04ZmY2LTU0ZDU3MGMzNWQyOCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>