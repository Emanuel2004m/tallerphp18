<?php
    class matriculaController {
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
            require_once(MODEL_PATH.'matriculaModel.php');
            $this->model = new matriculaModel();
        }

        public function insert($fecha,$idEstudiante,$idCurso,$idUsuario) {
            $id = $this->model->insertar($fecha,$idEstudiante,$idCurso,$idUsuario);
            return ($id!=false) ? header('location: ./index.php') : header('location: ./create.php');
        }

        public function update($id,$fecha,$idEstudiante,$idCurso,$idUsuario) {
            return ($this->model->actualizar($id,$fecha,$idEstudiante,$idCurso,$idUsuario) != false) ? header('location: ./index.php') : header('location: ./edit.php?id='.$id);
        }

        public function delete($id) {
            return ($this->model->eliminar($id)) ? header('location: ./index.php') : header('location: ./index.php') ;
        }

        public function search($id) {
            return ($this->model->buscar($id) != false) ? $this->model->buscar($id) : header('location: ./index.php');
        }
        
        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        }

        public function combolist() {
            return ($this->model->cargarDesplegable()) ? $this->model->cargarDesplegable() : false;
        }

        public function combolistC() {
            return ($this->model->cargardesplegableC()) ? $this->model->cargardesplegableC() : false;
        }

        public function combolistU() {
            return ($this->model->cargardesplegableU()) ? $this->model->cargardesplegableU() : false;
        }
    }
?>