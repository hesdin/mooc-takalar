@extends('app.index')


@section('content')
  <div class="container">
    <h2>Create Material</h2>

    <div id="kurikulum-sections">
      <div class="kurikulum-section card mb-3">
        <div class="card-body">
          <div class="form-group">
            <label for="title">Kurikulum Title</label>
            <input type="text" name="title" class="form-control" required>
          </div>
          <div class="kurikulum-items">
            <div class="kurikulum-item">
              <div class="form-group">
                <label for="order">Order</label>
                <input type="number" name="order" class="form-control">
              </div>
              <div class="form-group">
                <label for="sub_curriculum_title">Sub Kurikulum Title</label>
                <input type="text" name="sub_curriculum_title" class="form-control">
              </div>
              <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control"></textarea>
              </div>
              <button type="button" class="btn btn-danger btn-sm remove-kurikulum-item">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </div>
          <button type="button" class="btn btn-primary mb-3 add-kurikulum-item">
            <i class="bi bi-plus"></i>
          </button>
          <button type="button" class="btn btn-danger delete-kurikulum-section">
            <i class="bi bi-trash"></i>
          </button>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-primary mb-3 add-kurikulum-section">
      <i class="bi bi-plus"></i>
    </button>

    <button type="submit" class="btn btn-success">Create Kurikulum</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        let sectionCounter = 1;

        // Add Kurikulum Section
        $(document).on('click', '.add-kurikulum-section', function() {
          const template = `
                    <div class="kurikulum-section card mb-3">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Kurikulum Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="kurikulum-items">
                                <div class="kurikulum-item">
                                    <div class="form-group">
                                        <label for="order">Order</label>
                                        <input type="number" name="order" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_curriculum_title">Sub Kurikulum Title</label>
                                        <input type="text" name="sub_curriculum_title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea name="content" class="form-control"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-sm remove-kurikulum-item">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary mb-3 add-kurikulum-item">
                                <i class="bi bi-plus"></i>
                            </button>
                            <button type="button" class="btn btn-danger delete-kurikulum-section">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                `;

          $('#kurikulum-sections').append(template);
          sectionCounter++;
        });

        // Add Kurikulum Item
        $(document).on('click', '.add-kurikulum-item', function() {
          const kurikulumSection = $(this).closest('.kurikulum-section');
          const kurikulumItemsContainer = kurikulumSection.find('.kurikulum-items');

          const kurikulumItemTemplate = `
                    <div class="kurikulum-item">
                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="number" name="order" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sub_curriculum_title">Sub Kurikulum Title</label>
                            <input type="text" name="sub_curriculum_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm remove-kurikulum-item">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                `;

          kurikulumItemsContainer.append(kurikulumItemTemplate);
        });

        // Remove Kurikulum Item
        $(document).on('click', '.remove-kurikulum-item', function() {
          $(this).closest('.kurikulum-item').remove();
        });

        // Remove Kurikulum Section
        $(document).on('click', '.delete-kurikulum-section', function() {
          $(this).closest('.kurikulum-section').remove();
        });

        // Submit form using Ajax
        $('#create-kurikulum-form').submit(function(e) {
          e.preventDefault();
          const url = $(this).attr('action');
          const method = $(this).attr('method');
          const data = $(this).serialize();

          $.ajax({
            url: url,
            method: method,
            data: data,
            success: function(response) {
              console.log(response);
              // Handle success response
            },
            error: function(xhr) {
              console.log(xhr.responseText);
              // Handle error response
            }
          });
        });
      });
    </script>
  @endsection
