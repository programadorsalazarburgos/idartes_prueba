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
                <h5>II. MOTIVO DE CONSULTA / INGRESO</h5>
                <div class="form-row">
                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      id="validationCustom01"
                      type="text"
                      required=""
                      onlyAlphabets
                    ></textarea>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h5>III. ANTECEDENTES DE ENFERMEDAD ACTUAL:</h5>
                <div class="form-row">
                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      id="validationCustom01"
                      type="text"
                      required=""
                      onlyAlphabets
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
            <h5>IV. ANTECEDENTES PERSONALESj</h5>
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
                    />
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02">Fum</label>
                    <input
                      class="form-control"
                      id="validationCustom02"
                      type="text"
                      required=""
                      onlyAlphabets
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
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Aparato Genito-Urinario hh
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
                  />
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername">Tº Con laser:</label>
                  <input
                    class="form-control"
                    id="validationCustomUsername"
                    type="text"
                    aria-describedby="inputGroupPrepend"
                    required=""
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
                    v-model="otro"
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
                      ></textarea>
                      <div class="valid-feedback">Looks good!</div>
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
export default {
  data() {
    return {
      check_tabaco:false,
      fields: {
        title: "",
        comment_text: "",
        thumbnail: null,       
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
      errors: {},
      form_submitting: false,
    };
  },
  components: {
    FormWizard,
    TabContent,
  },
  methods: {
    beforeTabSwitch: function () {
      console.log(this.check_tabaco, "data resp");
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
      alert("¡Completado!");
    },
    select_file(event) {
      this.fields.thumbnail = event.target.files[0];
    },
    submit_form() {
      this.form_submitting = true;
      //pass thumbnail
      let fields = new FormData();
      for (let key in this.fields) {
        fields.append(key, this.fields[key]);
      }
      // axios.post('/api/comments', this.fields)
      axios
        .post("/api/comments", fields)
        .then((response) => {
          this.$swal("Comment saved!");
          this.$router.push("/");
          this.form_submitting = false;
        })
        .catch((error) => {
          if (error.response.status === 422) {
            this.$swal({
              icon: "warning",
              title: "Error happened",
            });
            this.errors = error.response.data.errors;
          }
          this.form_submitting = false;
        });
    },
  },
};
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