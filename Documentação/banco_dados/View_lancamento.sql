CREATE OR REPLACE VIEW dados_entrada_saida as
SELECT `id_operacao`,`placa`,`motorista`,`dt_entrada`,
(SELECT funcionarios.nome_func FROM funcionarios WHERE id_func_entrada = funcionarios.id_func) as entrada,
`dt_saida`,
(SELECT funcionarios.nome_func FROM funcionarios WHERE id_func_saida = funcionarios.id_func)as saida,
`valor`,`pago_ate`
from entrada_saida