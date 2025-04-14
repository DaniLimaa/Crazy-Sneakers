using MySql.Data.MySqlClient;
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
            string connectionString = "Server=localhost; Port=3306; Database=bd_crazy_sneakers; Uid=root; Pwd=;";
            try
            {
                using (MySqlConnection consulta = new MySqlConnection(connectionString))
                {
                    consulta.Open();

                    string listagem = "SELECT Id_Cliente, NomeCompleto, CPF, Email, CEP, Numero, Telefone FROM tb_clientes";

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
    }
    }
}
