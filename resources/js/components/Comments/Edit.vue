<template>
  <div>
    <form-wizard @on-complete="onComplete" next-button-text="Siguiente">
      <tab-content
        title="Detalles personales"
        icon="ti-user"
        :before-change="beforeTabSwitch"
      >

     <div class="col-md-12">
          <div class="container-fluid">
            <div class="row">
                 <div class="col-md-6">
                <h5>I. Acompañante</h5>
                <div class="form-row">
                  <div class="col-md-12">
                    <input
                        class="form-control"
                        type="text"
                         v-model="acompaniante"  
                        :disabled="disabledAcompaniante"                   
                      />
                  </div>
                </div>
              </div>            
            </div>
          </div>
     </div>
      <div class="clearfix"></div><br>
        <div class="col-md-12">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <h5>II. Motivo de la consulta / Ingreso</h5>
                <div class="form-row">
                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      id="validationCustom01"
                      type="text"
                      required=""
                      onlyAlphabets
                      v-model="motivo_consulta"
                      :disabled="disabledMotivoConsulta" 
                    ></textarea>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h5>III. Antecedentes de enfermedad actual:</h5>
                <div class="form-row">
                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      id="validationCustom01"
                      type="text"
                      required=""
                      onlyAlphabets
                      v-model="antecedentes_enfermedad"
                      :disabled="disabledAntecedenteEnfermedad" 
                    ></textarea>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <br />
          <div class="container-fluid">
            <h5>IV. Antecedentes Personales</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault"
                        v-model="check_tabaco"
                        @change="checkTabaco($event)"                       
                      />
                      <label class="form-check-label" for="flexCheckDefault">
                        Tabaco
                      </label>
                    </div>
                    <br />
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <input
                          class="form-control"
                          id="validationCustom01"
                          type="text"
                          required=""
                          onlyAlphabets
                           :disabled="disabledTabaco"
                           v-model="tabaco"
                        />
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault"
                          v-model="check_alcohol"
                            @change="checkAlcohol($event)"
                      />
                      <label class="form-check-label" for="flexCheckDefault">
                        Alcohol
                      </label>
                    </div>
                    <br />
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <input
                          class="form-control"
                          id="validationCustom01"
                          type="text"
                          required=""
                          onlyAlphabets
                          :disabled="disabledAlcohol"
                          v-model="alcohol"
                        />
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault"
                        v-model="check_drogas"
                        @change="checkDrogas($event)"
                      />
                      <label class="form-check-label" for="flexCheckDefault">
                        Drogas
                      </label>
                    </div>
                    <br />
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <input
                          class="form-control"
                          id="validationCustom01"
                          type="text"
                          required=""
                          onlyAlphabets
                          :disabled="disabledDrogas"
                          v-model="drogas"
                        />
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault"
                        v-model="check_otras"
                        @change="checkOtras($event)"
                      />
                      <label class="form-check-label" for="flexCheckDefault">
                        Otras
                      </label>
                    </div>
                    <br />
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <input
                          class="form-control"
                          id="validationCustom01"
                          type="text"
                          required=""
                          onlyAlphabets
                          :disabled="disabledOtras"
                          v-model="otras"
                        />
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <label for="validationCustom01">Variaciones de peso</label>
                    <input
                      class="form-control"
                      id="validationCustom01"
                      type="text"
                      required=""
                      onlyAlphabets
                      v-model="variaciones_peso"
                      :disabled="disabledVariaciones" 
                    />
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02">Fecha de ultima mestruación</label>
                    <input
                      class="form-control"
                      id="validationCustom02"
                      type="text"
                      required=""
                      onlyAlphabets
                      v-model="fum"
                      :disabled="disabledFechaUltima" 
                    />
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02">Planificación</label>
                    <input
                      class="form-control"
                      id="validationCustomUsername"
                      type="text"
                      aria-describedby="inputGroupPrepend"
                      required=""
                      v-model="planificacion"
                      :disabled="disabledPlanificacion" 
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">PATOLÓGICOS</label>
                <input
                  class="form-control"
                  id="validationCustom01"
                  type="text"
                  required=""
                  onlyAlphabets
                  v-model="patologico"
                  :disabled="disabledPatologicos" 
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom02">MEDICAMENTOS QUE TOMA</label>
                <input
                  class="form-control"
                  id="validationCustom02"
                  type="text"
                  required=""
                  onlyAlphabets
                  v-model="medicamentos_toma"
                  :disabled="disabledMedicamentosToma" 
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
          </div>
        </div>
      </tab-content>
      <tab-content title="Información adicional">
        <div class="col-xs-12">
          <div class="col-md-12">
            <div class="container-fluid">
              <h5>ANTECEDENTES. CLÍNICOS/ REVISION POR SISTEMAS:</h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkCardiovascular($event)"
                           v-model="check_cardiovascular"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Aparato Cardiovascular
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="cardiovascular"
                            :disabled="disabledCardiovascular"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkRespiratorio($event)"
                           v-model="check_respiratorio"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Aparato Respiratorio
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="respiratorio"
                             :disabled="disabledRespiratorio"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkOtorrino($event)"
                           v-model="check_otorrino"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Otorrino
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="otorrino"
                            :disabled="disabledOtorrino"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkDigestivo($event)"
                           v-model="check_digestivo"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Aparato Digestivo
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="digestivo"
                            :disabled="disabledDigestivo"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkUrinario($event)"
                           v-model="check_urinario"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Aparato Genito-Urinario 
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="urinario"
                            :disabled="disabledUrinario"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkFaneras($event)"
                           v-model="check_faneras"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Piel y Faneras
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="faneras"
                            :disabled="disabledFaneras"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkPsiquiatricas($event)"
                           v-model="check_psiquiatricas"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Enfermedades Psiquiátricas
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="psiquiatricas"
                            :disabled="disabledPsiquiatricas"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkMetabolicas($event)"
                           v-model="check_metabolicas"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Enfermedades Endócrinas y Metabólicas
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="metabolicas"
                            :disabled="disabledMetabolicas"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkHematologicas($event)"
                           v-model="check_hematologicas"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Enfermedades Inmuno-Hematológicas
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="hematologicas"
                            :disabled="disabledHematologicas"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                           @change="checkNervioso($event)"
                           v-model="check_nervioso"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Enfermedades del sistema Nervioso
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="nervioso"
                            :disabled="disabledNervioso"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">                
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault" 
                           @change="checkNervioso2($event)"
                           v-model="check_locomotor"
                          
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Enfermedades del aparato locomotor
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="locomotor"
                            :disabled="disabledLocomotor"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                            @change="checkOtrasClinicos($event)"
                           v-model="check_otras_clinicos"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Otras
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets
                            v-model="otras_clinicos"
                            :disabled="disabledOtrasClinicos"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </tab-content>
      <tab-content title="Verificación">
        <div class="col-xs-12">
          <div class="col-md-12">
            <div class="container-fluid">
              <h5>ANTECEDENTES</h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                          @change="checkCirugias($event)"
                           v-model="check_cirugias"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          CIRUGIAS
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets                           
                           v-model="cirugias"
                          :disabled="disabledCirugias"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                          @change="checkTraumaticos($event)"
                           v-model="check_traumaticos"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          TRAUMÁTICOS
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets                             
                           v-model="traumaticos"
                           :disabled="disabledTraumaticos"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                              @change="checkAlergicos($event)"
                           v-model="check_alergicos"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          ANTECEDENTES ALÉRGICOS
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets                            
                           v-model="alergicos"
                          :disabled="disabledAlergicos"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                            @change="checkPrevios($event)"
                           v-model="check_previos"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          EXÁMENES COMPLEMENTARIOS PREVIOS
                        </label>
                      </div>
                      <br />
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input
                            class="form-control"
                            id="validationCustom01"
                            type="text"
                            required=""
                            onlyAlphabets                            
                           v-model="previos"
                          :disabled="disabledPrevios"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h5>V. ANTECEDENTES. HEREDOFAMILIARES:</h5>
            <div class="form-row">
              <div class="col-md-12">
                <textarea
                  class="form-control"
                  id="validationCustom01"
                  type="text"
                  required=""
                   v-model="antecedentes_herdofamiliares"
                  onlyAlphabets
                ></textarea>
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
          </div>
        </div>
      </tab-content>
      <tab-content title="Verificación">
        <div class="container-fluid">
          <h5>VI. EXAMEN FÍSICO:</h5>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label for="validationCustom01">Estado General</label>
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="estado_general"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02">Peso</label>
                  <input
                    class="form-control"
                    id="validationCustom02"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="peso"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername">Talla:</label>
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
                    v-model="talla"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label for="validationCustom01"
                    >Indice de masa corporal:</label
                  >
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="masa_corporal"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02">Estado nutriciónal</label>
                  <input
                    class="form-control"
                    id="validationCustom02"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="estado_nutricional"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername"
                    >Estado de Hidratación:</label
                  >
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
                    v-model="estado_hidratacion"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label for="validationCustom01">Presión arterial:</label>
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="presion_arterial_fisico"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02">Oxigenacion:</label>
                  <input
                    class="form-control"
                    id="validationCustom02"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="oxigenacion_fisico"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername">Temperatura:</label>
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
                    v-model="t_laser"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label for="validationCustom01"
                    >Frecuencia respiratoria:</label
                  >
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="frecuencia_respiratoria"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02">Pulso::</label>
                  <input
                    class="form-control"
                    id="validationCustom02"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="pulso_fisico"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername">PIEL Y FANERAS:</label>
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
                    v-model="piel_faneras"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label for="validationCustom01">OTORRINO:</label>
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    v-model="otorrino"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02">MUCOSAS:</label>
                  <input
                    class="form-control"
                    id="validationCustom02"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="mucosas"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername">CABEZA:</label>
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
                    v-model="cabeza"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
     
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label for="validationCustom01">CUELLO:</label>
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="cuello"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02">TÓRAX:</label>
                  <input
                    class="form-control"
                    id="validationCustom02"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="torax"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername"
                    >APARATO RESPIRATORIO:</label
                  >
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
                    v-model="respiratorio"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label for="validationCustom01"
                    >APARATO. CARDIOVASCULAR:</label
                  >
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="cardiovascular"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02"
                    >ABDOMEN (APARATO DIGESTIVO ):</label
                  >
                  <input
                    class="form-control"
                    id="validationCustom02"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="abdomen"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername"
                    >GENITO - URINARIO:</label
                  >
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
                    v-model="genito_unitario"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <label for="validationCustom01">OSTEOMIOARTICULAR::</label>
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="osteomioarticular"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02">NEUROLÓGICO:</label>
                  <input
                    class="form-control"
                    id="validationCustom02"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="neurologico"
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername">Glasgow:</label>
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
                    v-model="glasgow"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <label for="validationCustom01">OTROS::</label>
                  <input
                    class="form-control"
                    id="validationCustom01"
                    type="text"
                    required=""
                    onlyAlphabets
                    v-model="otro_fisico"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </tab-content>
      <tab-content title="Verificación">
        <div class="col-xs-12">
          <div class="col-md-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-row">
                    <h5>VII. ANALISIS DE DERMATRON:</h5>
                    <div class="col-md-12">
                      <textarea
                        class="form-control"
                        id="validationCustom01"
                        type="text"
                        required=""
                        onlyAlphabets
                        v-model="analisis_dermaton"
                      ></textarea>
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-row">
                    <h5>VIII . DIAGNÓSTICOS PRESUNTIVOS:</h5>
                    <div class="col-md-12">
                      <textarea
                        class="form-control"
                        id="validationCustom01"
                        type="text"
                        required=""
                        onlyAlphabets
                        v-model="diagnosticos_presuntivos"
                      ></textarea>
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-row">
                    <h5>IX . SOLICITUD DE EXÁMENES COMPLEMENTARIOS:</h5>
                    <div class="col-md-12">
                      <textarea
                        class="form-control"
                        id="validationCustom01"
                        type="text"
                        required=""
                        onlyAlphabets
                        v-model="examenes_complementarios"
                      ></textarea>
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-row">
                    <h5>X . TRATAMIENTO ALOPATICO Y HOMEOPATICO:</h5>
                    <div class="col-md-12">
                      <textarea
                        class="form-control"
                        id="validationCustom01"
                        type="text"
                        required=""
                        onlyAlphabets
                        v-model="tratamiento_alopatico"
                      ></textarea>
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-row">
                    <h5>XI. RECOMENDACIONES:</h5>
                    <div class="col-md-12">
                      <textarea
                        class="form-control"
                        id="validationCustom01"
                        type="text"
                        required=""
                        onlyAlphabets
                        v-model="recomendaciones"
                      ></textarea>
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="container-fluid" v-if="exists_historia_paciente == true">
              <div class="row" v-if="arrayEvoluciones.length > 0">
                <div class="col-md-12">
                  <div class="form-row">
                    <h5>EVOLUCIONES</h5>
                    <div class="col-md-12" v-for="data in arrayEvoluciones">
                      <label for="">Creación Evolución</label>
                      <input type="text" disabled class="form-control" v-model="data.created_at">
                      <br>
                      <label for="">Descripción Evolución</label>
                      <textarea
                        class="form-control"
                        id="validationCustom01"
                        type="text"
                        required=""
                        onlyAlphabets
                        value="data.evolucion"
                        v-model="data.evolucion"
                        disabled
                      ></textarea>
                      <br>
                      <label for="">Acompañante Evolución</label>
                        <input
                        class="form-control"
                        type="text"
                         v-model="data.acompaniante_evolucion"  
                         disabled                    
                      />
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid" v-if="exists_historia_paciente == true">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-row">
                    <h5>AGREGAR EVOLUCIÓN</h5>
                    <div class="col-md-12">
                    <button
                                    @click="agregarEvolucion()"
                                    class="btn btn-primary btn-sm"
                                    type="button"
                                    title=""
                                    data-bs-original-title="btn btn-success btn-sm"
                                    data-original-title="btn btn-light btn-sm"
                                >
                                    Crear Evolución
                      </button>
                      <div class="clearfix"></div><br>
                      <label for="">Descripción Evolución</label>
                        <textarea
                        class="form-control"
                        id="validationCustom01"
                        type="text"
                        required=""
                        onlyAlphabets
                        v-model="evolucion"
                        :disabled="disabledEvolucion"
                      ></textarea>
                    </div>
                      <div class="col-md-12">
                    <label for="">Acompañante Evolución</label>
                    <input
                        class="form-control"
                        type="text"
                         v-model="acompaniante_evolucion"                      
                      />
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <br />
          </div>
        </div>
      </tab-content>
    </form-wizard>
  </div>
</template>

<script>
import { FormWizard, TabContent } from "vue-form-wizard";
import "vue-form-wizard/dist/vue-form-wizard.min.css";
export default{
  data() {
    return {
      base: '',
      check_tabaco:false,
      check_alcohol:false,
      disabledAlcohol:true,
      check_drogas:false,
      disabledDrogas:true,
      check_otras:false,
      disabledOtras:true,
      check_cardiovascular:false,
      disabledCardiovascular:true,
      cardiovascular: "",
      check_respiratorio:false,
      disabledRespiratorio:true,
      respiratorio: "",
      check_otorrino:false,
      disabledOtorrino:true,
      otorrino: "",
      check_digestivo:false,
      disabledDigestivo:true,
      digestivo: "Normal",
      check_urinario:false,
      disabledUrinario:true,
      urinario: "Normal",
      check_faneras:false,
      disabledFaneras:true,
      faneras: "Normal",
      check_psiquiatricas:false,
      disabledPsiquiatricas:true,
      psiquiatricas:"Normal",
      check_metabolicas:false,
      disabledMetabolicas:true,
      metabolicas: "Normal",
      check_hematologicas:false,
      disabledHematologicas:true,
      hematologicas: "Normal",
      check_nervioso:false,
      disabledNervioso:true,
      nervioso: "Normal glasgow 15/15",
      check_locomotor:false,
      disabledLocomotor:true,
      icomotor: "Normal",
      check_otras_clinicos:false,
      disabledOtrasClinicos:true,
      otras_clinicos: "",
      check_cirugias:false,
      disabledCirugias:true,
      cirugias: "",
      check_traumaticos:false,
      disabledTraumaticos:true,
      traumaticos: "Normal",
      check_alergicos:false,
      disabledAlergicos:true,
      alergicos: "Sin antecedentes",
      check_previos:false,
      disabledPrevios:true,
      previos: "",
      fields: {
        title: '',
        comment_text: '',
        thumbnail: null
      },
        otorrino: "Normal",
        mucosas: "Normal",
        cabeza: "Normal",
        cuello: "Normal",
        torax: "Normal",
        respiratorio: "Normal",
        cardiovascular: "Normal",
        abdomen: "Normal",
        genito_unitario: "Normal",
        osteomioarticular: "Normal",
        neurologico: "Normal",
        glasgow: "Normal",
        otro: "Normal",
        disabledTabaco:true,
        tabaco: "",
        alcohol: "",
        drogas: "No antecedentes de consumo",
        otras: "",
        errors: {},
        form_submitting: false,        
        motivo_consulta: "",
        antecedentes_enfermedad: "",
        variaciones_peso: "",
        planificacion: "",
        medicamentos_toma: "",
        patologico: "",
        locomotor: "Normal",
        antecedentes_herdofamiliares: "",
        estado_general: "Buen estado general",
        peso: "",
        talla: "",
        masa_corporal: "",
        estado_nutricional: "Normal",
        estado_hidratacion: "Hidratado",
        presion_arterial_fisico: "",
        oxigenacion_fisico: "",
        t_laser: "Afebril",
        frecuencia_respiratoria: "",
        pulso_fisico: "",
        piel_faneras: "Normal",
        otro_fisico:"",
        analisis_dermaton: "",
        diagnosticos_presuntivos: "",
        examenes_complementarios: "",
        tratamiento_alopatico: "",
        recomendaciones: "",
        fum: "",
        exists_historia: false,
        arrayEvoluciones: [],
        evolucion: "",
        disabledEvolucion: true,
        exists_historia_paciente: false,
        acompaniante:"Ninguno",
        acompaniante_evolucion:"Ninguno",
        disabledAcompaniante:false,
        disabledMotivoConsulta:false,
        disabledAntecedenteEnfermedad:false,
    }
  },

  async mounted(){
    this.base = base;
    console.log(this.$route.params.id);
     var url = '/count_historia?paciente_id=' + this.$route.params.id;    
     let validacion =  await axios.get(url);  
     this.exists_historia_paciente = validacion.data.respuesta;   
      if (validacion.data.respuesta) {
        this.getHisrotiaPaciente();        
      }
  },
  components: {
    FormWizard,
    TabContent,
  },
  methods: {
  
    agregarEvolucion()
    {
      this.disabledEvolucion = false;
    },

    getHisrotiaPaciente()
    {
      axios.get(this.base  + 'get_historia?paciente_id=' + this.$route.params.id)
      .then(response => {
       
          this.motivo_consulta = response.data.respuesta.motivo_consulta;
          this.antecedentes_enfermedad = response.data.respuesta.antecedentes_enfermedad_actual;
          this.check_tabaco = response.data.respuesta.tabaco;
          this.tabaco = response.data.respuesta.desc_tabaco;
          this.check_alcohol = response.data.respuesta.alcohol;
          this.alcohol = response.data.respuesta.desc_alcohol;
          this.check_drogas = response.data.respuesta.drogas;
          this.drogas = response.data.respuesta.desc_drogas;
          this.check_otras = response.data.respuesta.otras;
          this.otras = response.data.respuesta.desc_otras;
          this.variaciones_peso = response.data.respuesta.variaciones_peso;
          this.planificacion = response.data.respuesta.planificacion;
          this.patologico = response.data.respuesta.patologicos;
          this.medicamentos_toma = response.data.respuesta.medicamentos_toma;
          this.check_cardiovascular = response.data.respuesta.aparato_cardiovascular;
          this.cardiovascular = response.data.respuesta.desc_aparato_cardiovascular;
          this.check_respiratorio = response.data.respuesta.aparato_respiratorio;
          this.respiratorio = response.data.respuesta.desc_aparato_respiratorio;
          this.check_otorrino = response.data.respuesta.otorrino;
          this.otorrino = response.data.respuesta.desc_otorrino;
          this.check_digestivo = response.data.respuesta.aparato_digestivo;
          this.digestivo = response.data.respuesta.desc_aparato_digestivo;
          this.check_urinario = response.data.respuesta.aparato_unitario;
          this.urinario = response.data.respuesta.desc_aparato_unitario;
          this.check_faneras = response.data.respuesta.piel_faneras;
          this.faneras = response.data.respuesta.desc_piel_faneras;
          this.check_psiquiatricas = response.data.respuesta.entidades_psiquiatricas;
          this.psiquiatricas = response.data.respuesta.desc_entidades_psiquiatricas;
          this.check_metabolicas = response.data.respuesta.enfermedades_endocrinas;
          this.metabolicas = response.data.respuesta.desc_enfermedades_endocrinas;
          this.check_hematologicas = response.data.respuesta.enfermedades_inmuno_hematologicas;
          this.hematologicas = response.data.respuesta.desc_inmuno_hematologicas;
          this.check_nervioso = response.data.respuesta.enfermedades_sistema_nervioso;
          this.nervioso = response.data.respuesta.desc_enfermedades_sistema_nervioso;
          this.check_locomotor = response.data.respuesta.enfermedades_aparato_icomotor;
          this.locomotor = response.data.respuesta.desc_enfermedades_aparato_icomotor;
          this.check_otras_clinicos = response.data.respuesta.enfermedades_otras;
          this.otras_clinicos = response.data.respuesta.desc_enfermedades_otras;
          this.check_cirugias = response.data.respuesta.cirugias;
          this.cirugias = response.data.respuesta.desc_cirugias;
          this.check_traumaticos = response.data.respuesta.traumaticos;
          this.traumaticos = response.data.respuesta.desc_traumaticos;
          this.check_alergicos = response.data.respuesta.antecedentes_alergicos;
          this.alergicos = response.data.respuesta.desc_antecedentes_alergicos;
          this.check_previos = response.data.respuesta.examenes_complementarios;
          this.previos = response.data.respuesta.desc_examenes_complementarios;
          this.antecedentes_herdofamiliares = response.data.respuesta.antecedentes_heredofamiliares;
          this.estado_general = response.data.respuesta.estado_general;
          this.peso = response.data.respuesta.peso;
          this.talla = response.data.respuesta.talla;
          this.masa_corporal = response.data.respuesta.masa_corporal;
          this.estado_nutricional = response.data.respuesta.estado_nutricional;
          this.estado_hidratacion = response.data.respuesta.estado_hidratacion;
          this.presion_arterial_fisico = response.data.respuesta.presion_arterial;
          this.oxigenacion_fisico = response.data.respuesta.oxigenacion;
          this.t_laser = response.data.respuesta.t_laser;
          this.frecuencia_respiratoria = response.data.respuesta.frecuencia_respiratoria;
          this.pulso_fisico = response.data.respuesta.pulso;
          this.piel_faneras = response.data.respuesta.piel_faneras_fisico;
          this.otorrino = response.data.respuesta.otorrino_fisico;
          this.mucosas = response.data.respuesta.mucosas;
          this.cabeza = response.data.respuesta.cabeza;
          this.cuello = response.data.respuesta.cuello;
          this.torax = response.data.respuesta.torax;
          this.respiratorio = response.data.respuesta.aparato_respiratorio_fisico;
          this.cardiovascular = response.data.respuesta.aparato_cardiovascular_fisico;
          this.abdomen = response.data.respuesta.abdomen;
          this.genito_unitario = response.data.respuesta.genito;
          this.osteomioarticular = response.data.respuesta.osteomioarticular;
          this.neurologico = response.data.respuesta.neurologico;
          this.glasgow = response.data.respuesta.glasgow;
          this.otro_fisico = response.data.respuesta.otros_fisico;
          this.analisis_dermaton = response.data.respuesta.dermaton_analisis;
          this.diagnosticos_presuntivos = response.data.respuesta.diagnostico_presuntivos;
          this.examenes_complementarios = response.data.respuesta.solicitud_examenes;
          this.tratamiento_alopatico = response.data.respuesta.tratamiento_alopatico;
          this.recomendaciones = response.data.respuesta.recomendaciones;                    
          this.acompaniante = response.data.respuesta.acompaniante;                    
          this.arrayEvoluciones = response.data.evoluciones;
          this.disabledAcompaniante = true;
          this.disabledMotivoConsulta = true;
          this.disabledAntecedenteEnfermedad = true;
          this.disabledVariaciones = true;
          this.disabledFechaUltima = true;
          this.disabledPlanificacion = true;
          this.disabledPatologicos = true;
          this.disabledVariaciones = true;
          this.disabledFechaUltima = true;
          this.disabledPlanificacion = true;
          this.disabledPatologicos = true;
          this.disabledMedicamentosToma = true;
      });

    },
    checkTabaco()
    {
      if (this.check_tabaco == true) {
        this.disabledTabaco = false;
      }
      if (this.check_tabaco == false) {
        this.disabledTabaco = true;
        this.tabaco = "";
      }
    },
    checkAlcohol()
    {
      if (this.check_alcohol == true) {
        this.disabledAlcohol = false;
      }
      if (this.check_alcohol == false) {
        this.disabledAlcohol = true;
        this.alcohol = "";
      }
    },
    checkDrogas()
    {
      if (this.check_drogas == true) {
        this.disabledDrogas = false;
      }
      if (this.check_drogas == false) {
        this.disabledDrogas = true;
        this.drogas = "";
      }
    },
    checkOtras()
    {
      if (this.check_otras == true) {
        this.disabledOtras = false;
      }
      if (this.check_otras == false) {
        this.disabledOtras = true;
        this.otras = "";
      }
    },
    checkCardiovascular()
    {
      if (this.check_cardiovascular == true) {
        this.disabledCardiovascular = false;
      }
      if (this.check_cardiovascular == false) {
        this.disabledCardiovascular = true;
        this.cardiovascular = "";
      }
    },
    checkRespiratorio()
    {
      if (this.check_respiratorio == true) {
        this.disabledRespiratorio = false;
      }
      if (this.check_respiratorio == false) {
        this.disabledRespiratorio = true;
        this.respiratorio = "";
      }
    },
    checkOtorrino()
    {
      if (this.check_otorrino == true) {
        this.disabledOtorrino = false;
      }
      if (this.check_otorrino == false) {
        this.disabledOtorrino = true;
        this.otorrino = "";
      }
    },
    checkDigestivo()
    {
      if (this.check_digestivo == true) {
        this.disabledDigestivo = false;
      }
      if (this.check_digestivo == false) {
        this.disabledDigestivo = true;
        this.digestivo = "";
      }
    },
    checkUrinario()
    {
      if (this.check_urinario == true) {
        this.disabledUrinario = false;
      }
      if (this.check_urinario == false) {
        this.disabledUrinario = true;
        this.urinario = "";
      }
    },
    checkFaneras()
    {
      if (this.check_faneras == true) {
        this.disabledFaneras = false;
      }
      if (this.check_faneras == false) {
        this.disabledFaneras = true;
        this.faneras = "";
      }
    },
    checkPsiquiatricas()
    {
      if (this.check_psiquiatricas == true) {
        this.disabledPsiquiatricas = false;
      }
      if (this.check_psiquiatricas == false) {
        this.disabledPsiquiatricas = true;
        this.psiquiatricas = "";
      }
    },
    checkMetabolicas()
    {
      if (this.check_metabolicas == true) {
        this.disabledMetabolicas = false;
      }
      if (this.check_metabolicas == false) {
        this.disabledMetabolicas = true;
        this.metabolicas = "";
      }
    },
    checkHematologicas()
    {
      if (this.check_hematologicas == true) {
        this.disabledHematologicas = false;
      }
      if (this.check_hematologicas == false) {
        this.disabledHematologicas = true;
        this.hematologicas = "";
      }
    },
    checkNervioso()
    {
      if (this.check_nervioso == true) {
        this.disabledNervioso = false;
      }
      if (this.check_nervioso == false) {
        this.disabledNervioso = true;
        this.nervioso = "";
      }
    },
      checkNervioso2()
    {
      if (this.check_locomotor == true) {
        this.disabledLocomotor = false;
      }
      if (this.check_locomotor == false) {
        this.disabledLocomotor = true;
        this.icomotor = "";
      }
    },

    checklocomotor()
    {
      if (this.check_locomotor == true) {
        this.disabledLocomotor = false;
      }
      if (this.check_locomotor == false) {
        this.disabledLocomotor = true;
        this.icomotor = "";
      }
    },
    checkOtrasClinicos()
    {
      if (this.check_otras_clinicos == true) {
        this.disabledOtrasClinicos = false;
      }
      if (this.check_otras_clinicos == false) {
        this.disabledOtrasClinicos = true;
        this.otras_clinicos = "";
      }
    },  
     checkICirugias()
    {
      if (this.check_cirugias == true) {
        this.disabledCirugias = false;
      }
      if (this.check_cirugias == false) {
        this.disabledCirugias = true;
        this.cirugias = "";
      }
    },
     checkTraumaticos()
    {
      if (this.check_traumaticos == true) {
        this.disabledTraumaticos = false;
      }
      if (this.check_traumaticos == false) {
        this.disabledTraumaticos = true;
        this.traumaticos = "";
      }
    },
     checkAlergicos()
    {
      if (this.check_alergicos == true) {
        this.disabledAlergicos = false;
      }
      if (this.check_alergicos == false) {
        this.disabledAlergicos = true;
        this.alergicos = "";
      }
    },
     checkPrevios()
    {
      if (this.check_previos == true) {
        this.disabledPrevios = false;
      }
      if (this.check_previos == false) {
        this.disabledPrevios = true;
        this.previos = "";
      }
    },
     checkCirugias()
    {
      if (this.check_cirugias == true) {
        this.disabledCirugias = false;
      }
      if (this.check_cirugias == false) {
        this.disabledCirugias = true;
        this.cirugias = "";
      }
    },
    beforeTabSwitch: function () {
      console.log(this.check_tabaco, "tabaco");
      return new Promise((resolve, reject) => {
        setTimeout(() => {
          if (this.count < 1) {
            this.count++;
            reject(
              "This is a custom validation error message. Click next again to get rid of the validation"
            );
          } else {
            this.count = 0;
            resolve(true);
          }
        }, 1000);
      });
    },
    onComplete: function () {

      if (this.exists_historia_paciente && this.evolucion != "") {
          axios
          .post(this.base + 'historias_evolucion/registrar', {
              evolucion: this.evolucion,    
              paciente_id: this.$route.params.id,
              acompaniante_evolucion: this.acompaniante_evolucion
          })
          .then(function(response) {        
              window.location.href='/';             
          })
          .catch(function(error) {
              this.$swal({
                  title: "Lo sentimos!",
                  text: "Dato Existente",
                  icon: "error",
                  button: "Aww yiss!",
              });
          });
      }
      else {
      axios
          .post(this.base + 'historias/registrar', {
              motivo_consulta: this.motivo_consulta,
              antecedentes_enfermedad: this.antecedentes_enfermedad,
              check_tabaco: this.check_tabaco,
              tabaco: this.tabaco,
              check_alcohol: this.check_alcohol,
              alcohol: this.alcohol,
              check_drogas: this.check_drogas,
              drogas: this.drogas,
              check_otras: this.check_otras,
              otras: this.otras,
              variaciones_peso: this.variaciones_peso,
              fum: this.fum,
              planificacion: this.planificacion,
              medicamentos_toma: this.medicamentos_toma,
              patologico: this.patologico,
              check_cardiovascular: this.check_cardiovascular,
              cardiovascular: this.cardiovascular,
              check_respiratorio: this.check_respiratorio,
              respiratorio: this.respiratorio,
              check_otorrino: this.check_otorrino,
              otorrino: this.otorrino,
              check_digestivo: this.check_digestivo,
              digestivo: this.digestivo,
              check_urinario: this.check_urinario,
              urinario: this.urinario,
              check_faneras: this.check_faneras,
              faneras: this.faneras,
              check_psiquiatricas: this.check_psiquiatricas,
              psiquiatricas: this.psiquiatricas,
              check_metabolicas: this.check_metabolicas,
              metabolicas: this.metabolicas,
              check_hematologicas: this.check_hematologicas,
              hematologicas: this.hematologicas,
              check_nervioso: this.check_nervioso,
              nervioso: this.nervioso,
              check_locomotor: this.check_locomotor,
              locomotor: this.locomotor,
              check_otras_clinicos: this.check_otras_clinicos,
              otras_clinicos: this.otras_clinicos,
              check_cirugias: this.check_cirugias,
              cirugias: this.cirugias,
              check_traumaticos: this.check_traumaticos,
              traumaticos: this.traumaticos,
              check_alergicos: this.check_alergicos,
              alergicos: this.alergicos,
              check_previos: this.check_previos,
              previos: this.previos,
              antecedentes_herdofamiliares: this.antecedentes_herdofamiliares,
              estado_general: this.estado_general,
              peso: this.peso,
              talla: this.talla,
              masa_corporal: this.masa_corporal,
              estado_nutricional: this.estado_nutricional,
              estado_hidratacion: this.estado_hidratacion,
              presion_arterial_fisico: this.presion_arterial_fisico,
              oxigenacion_fisico: this.oxigenacion_fisico,
              t_laser: this.t_laser,
              frecuencia_respiratoria: this.frecuencia_respiratoria,
              pulso_fisico: this.pulso_fisico,
              piel_faneras: this.piel_faneras,
              otorrino: this.otorrino,
              mucosas: this.mucosas,
              cabeza: this.cabeza,
              cuello: this.cuello,
              torax: this.torax,
              respiratorio: this.respiratorio,
              cardiovascular: this.cardiovascular,
              abdomen: this.abdomen,
              genito_unitario: this.genito_unitario,
              osteomioarticular: this.osteomioarticular,
              neurologico: this.neurologico,
              glasgow: this.glasgow,
              otro_fisico: this.otro_fisico,
              analisis_dermaton: this.analisis_dermaton,
              diagnosticos_presuntivos: this.diagnosticos_presuntivos,
              examenes_complementarios: this.examenes_complementarios,
              tratamiento_alopatico: this.tratamiento_alopatico,
              recomendaciones: this.recomendaciones,
              paciente_id: this.$route.params.id,
              acompaniante: this.acompaniante

          })
          .then(function(response) {       
              window.location.href='/';             
          })
          .catch(function(error) {
              this.$swal({
                  title: "Lo sentimos!",
                  text: "Dato Existente",
                  icon: "error",
                  button: "Aww yiss!",
              });
          });
      }
    },
    select_file(event) {
      this.fields.thumbnail = event.target.files[0];
    },
    select_file(event){
      this.fields.thumbnail = event.target.files[0];
    },

  }
}
</script>
<style>
 .vue-form-wizard .wizard-header {
    padding: 15px;
    position: relative;
    border-radius: 3px 3px 0 0;
    text-align: center;
    display: none;
}
</style>