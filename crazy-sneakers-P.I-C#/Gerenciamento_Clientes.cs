using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace crazy_sneakers_P.I_C_
{
    public partial class Gerenciamento_Clientes: Form
    {
        public Gerenciamento_Clientes()
        {
            InitializeComponent();
        }

        private void PesquisarClientes_Click(object sender, EventArgs e)
        {
            //Defina sua string de conexão com o banco
            string connectionString = "Server=82.180.153.103; Port=3306; Database=u239070143_crazy_sneakers; Uid=u239070143_daniel; Pwd=Casamento.1982;";
            try
            {
                using (MySqlConnection consulta = new MySqlConnection(connectionString))
                {
                    consulta.Open();

                    string listagem = "SELECT tb_usuario.id AS id_usuario, tb_usuario.usuario, tb_info_usuario.nome, tb_info_usuario.email, tb_info_usuario.telefone, tb_info_usuario.rua, tb_info_usuario.bairro, tb_info_usuario.n_casa, tb_info_usuario.cidade, tb_info_usuario.ano_nascimento, tb_info_usuario.status FROM tb_usuario INNER JOIN tb_info_usuario ON tb_usuario.id_info_usuario = tb_info_usuario.id;";

                    using (MySqlCommand cmd = new MySqlCommand(listagem, consulta))
                    {
                        MySqlDataReader reader = cmd.ExecuteReader();

                        DataTable dadosClientes = new DataTable();
                        dadosClientes.Load(reader);

                        dgvClientes.DataSource = dadosClientes;
                    }
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro ao listar os Clientes:" + ex.Message);
            }
        }

        private void RemoverClientes_Click(object sender, EventArgs e)
        {
            if (dgvClientes.SelectedRows.Count > 0)
            {
                int idUsuario = Convert.ToInt32(dgvClientes.SelectedRows[0].Cells["id_usuario"].Value);

                using (MySqlConnection conn = new MySqlConnection("sua_conexao"))
                {
                    conn.Open();

                    // Primeiro, buscar o id_info_usuario
                    int idInfoUsuario = 0;
                    using (MySqlCommand cmd = new MySqlCommand("SELECT id_info_usuario FROM tb_usuario WHERE id = @id", conn))
                    {
                        cmd.Parameters.AddWithValue("@id", idUsuario);
                        var result = cmd.ExecuteScalar();
                        if (result != null)
                            idInfoUsuario = Convert.ToInt32(result);
                    }

                    // Agora, deletar da tabela tb_usuario
                    using (MySqlCommand cmd = new MySqlCommand("DELETE FROM tb_usuario WHERE id = @id", conn))
                    {
                        cmd.Parameters.AddWithValue("@id", idUsuario);
                        cmd.ExecuteNonQuery();
                    }

                    // E deletar da tabela tb_info_usuario
                    using (MySqlCommand cmd = new MySqlCommand("DELETE FROM tb_info_usuario WHERE id = @id", conn))
                    {
                        cmd.Parameters.AddWithValue("@id", idInfoUsuario);
                        cmd.ExecuteNonQuery();
                    }

                    MessageBox.Show("Usuário deletado com sucesso!");
                }
            }
            else
            {
                MessageBox.Show("Selecione uma linha para deletar.");
            }
        }
    }
}
