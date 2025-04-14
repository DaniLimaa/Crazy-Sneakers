namespace crazy_sneakers_P.I_C_
{
    partial class Gerenciamento_Clientes
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.dgvClientes = new System.Windows.Forms.DataGridView();
            this.label1 = new System.Windows.Forms.Label();
            this.PesquisarClientes = new System.Windows.Forms.Button();
            this.RemoverClientes = new System.Windows.Forms.Button();
            this.fechar = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dgvClientes)).BeginInit();
            this.SuspendLayout();
            // 
            // dgvClientes
            // 
            this.dgvClientes.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvClientes.Location = new System.Drawing.Point(12, 104);
            this.dgvClientes.Name = "dgvClientes";
            this.dgvClientes.Size = new System.Drawing.Size(527, 334);
            this.dgvClientes.TabIndex = 0;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(212, 39);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(367, 31);
            this.label1.TabIndex = 1;
            this.label1.Text = "Gerenciamento de Clientes";
            // 
            // PesquisarClientes
            // 
            this.PesquisarClientes.Location = new System.Drawing.Point(588, 131);
            this.PesquisarClientes.Name = "PesquisarClientes";
            this.PesquisarClientes.Size = new System.Drawing.Size(175, 63);
            this.PesquisarClientes.TabIndex = 2;
            this.PesquisarClientes.Text = "Pesquisar Clientes";
            this.PesquisarClientes.UseVisualStyleBackColor = true;
            this.PesquisarClientes.Click += new System.EventHandler(this.PesquisarClientes_Click);
            // 
            // RemoverClientes
            // 
            this.RemoverClientes.Location = new System.Drawing.Point(588, 216);
            this.RemoverClientes.Name = "RemoverClientes";
            this.RemoverClientes.Size = new System.Drawing.Size(175, 63);
            this.RemoverClientes.TabIndex = 3;
            this.RemoverClientes.Text = "Remover Clientes";
            this.RemoverClientes.UseVisualStyleBackColor = true;
            // 
            // fechar
            // 
            this.fechar.Location = new System.Drawing.Point(588, 363);
            this.fechar.Name = "fechar";
            this.fechar.Size = new System.Drawing.Size(175, 63);
            this.fechar.TabIndex = 4;
            this.fechar.Text = "Fechar";
            this.fechar.UseVisualStyleBackColor = true;
            // 
            // Gerenciamento_Clientes
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.fechar);
            this.Controls.Add(this.RemoverClientes);
            this.Controls.Add(this.PesquisarClientes);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dgvClientes);
            this.Name = "Gerenciamento_Clientes";
            this.Text = "Gerenciamento_Clientes";
            ((System.ComponentModel.ISupportInitialize)(this.dgvClientes)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dgvClientes;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button PesquisarClientes;
        private System.Windows.Forms.Button RemoverClientes;
        private System.Windows.Forms.Button fechar;
    }
}